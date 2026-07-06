<?php
require __DIR__ . '/includes/guard.php';
require __DIR__ . '/../db_config.php';

$statusFilter = $_GET['status'] ?? 'all';
$loadError = '';
$orders = [];
$schemaReady = true;

try {
    if ($statusFilter === 'new' || $statusFilter === 'replied') {
        $stmt = $pdo->prepare('SELECT * FROM orders WHERE status = :status ORDER BY id DESC');
        $stmt->execute([':status' => $statusFilter]);
    } else {
        $stmt = $pdo->prepare('SELECT * FROM orders ORDER BY id DESC');
        $stmt->execute();
    }
    $orders = $stmt->fetchAll();
} catch (PDOException $e) {
    // Most likely cause: admin/schema_update.sql hasn't been run yet,
    // so the status column doesn't exist. Fall back to an unfiltered
    // read so the page still works, and surface a friendly notice.
    try {
        $stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC');
        $orders = $stmt->fetchAll();
        $schemaReady = false;
        $loadError = "Heads up: the dashboard's reply-tracking columns haven't been added to the database yet. Ask your developer to run admin/schema_update.sql once — replying will still work after that.";
    } catch (PDOException $e2) {
        $loadError = 'Could not load messages: ' . $e2->getMessage();
    }
}

$newCount = 0;
$repliedCount = 0;
foreach ($orders as $o) {
    $s = $o['status'] ?? 'new';
    if ($s === 'replied') $repliedCount++; else $newCount++;
}

function esc($v) {
    return htmlspecialchars((string)($v ?? ''), ENT_QUOTES, 'UTF-8');
}

function formatDate($row) {
    if (!empty($row['created_at'])) {
        $ts = strtotime($row['created_at']);
        if ($ts) return date('j M Y, g:i a', $ts);
    }
    return '—';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Messages — Mutende Crafts Admin</title>
<link rel="icon" type="image/png" href="../images/image_1.png">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/admin.css">
</head>
<body>

<header class="admin-header">
  <div class="admin-header-inner">
    <a href="dashboard.php" class="admin-brand">
      <img src="../images/image_1.png" alt="Mutende Crafts logo">
      Mutende Crafts <span>· Admin</span>
    </a>
    <nav class="admin-nav">
      <a href="../home.php" target="_blank" rel="noopener">View Site</a>
      <a href="logout.php">Log Out</a>
    </nav>
  </div>
</header>

<main class="admin-main">
  <div class="admin-wrap">

    <div class="admin-titlebar">
      <div>
        <h1>Customer Messages</h1>
        <p>Everything submitted through the website's order form, in one place.</p>
      </div>
      <div class="admin-counts">
        <span class="count-pill count-new"><?php echo $newCount; ?> New</span>
        <span class="count-pill count-replied"><?php echo $repliedCount; ?> Replied</span>
      </div>
    </div>

    <?php if ($loadError): ?>
      <div class="admin-notice"><?php echo esc($loadError); ?></div>
    <?php endif; ?>

    <div class="admin-filters">
      <a href="dashboard.php" class="filter-chip <?php echo $statusFilter === 'all' ? 'active' : ''; ?>">All (<?php echo count($orders); ?>)</a>
      <a href="dashboard.php?status=new" class="filter-chip <?php echo $statusFilter === 'new' ? 'active' : ''; ?>">New</a>
      <a href="dashboard.php?status=replied" class="filter-chip <?php echo $statusFilter === 'replied' ? 'active' : ''; ?>">Replied</a>
    </div>

    <?php if (empty($orders)): ?>
      <div class="admin-empty">
        <p>No messages here yet. Once someone submits the order form on the website, it'll show up in this list.</p>
      </div>
    <?php else: ?>

      <div class="message-list">
        <?php foreach ($orders as $o):
          $status = $o['status'] ?? 'new';
          $orderId = (int)$o['id'];
        ?>
        <div class="message-card" data-order-id="<?php echo $orderId; ?>">
          <button class="message-summary" type="button" aria-expanded="false">
            <span class="ms-status status-<?php echo esc($status); ?>"><?php echo $status === 'replied' ? 'Replied' : 'New'; ?></span>
            <span class="ms-name"><?php echo esc($o['name']); ?></span>
            <span class="ms-item"><?php echo esc($o['item']); ?></span>
            <span class="ms-date"><?php echo esc(formatDate($o)); ?></span>
            <svg class="ms-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>

          <div class="message-detail">
            <div class="detail-grid">
              <div>
                <span class="dl">Name</span>
                <span class="dv"><?php echo esc($o['name']); ?></span>
              </div>
              <div>
                <span class="dl">Email</span>
                <span class="dv"><a href="mailto:<?php echo esc($o['email']); ?>"><?php echo esc($o['email']); ?></a></span>
              </div>
              <div>
                <span class="dl">Wants</span>
                <span class="dv"><?php echo esc($o['item']); ?></span>
              </div>
              <div>
                <span class="dl">Colors</span>
                <span class="dv"><?php echo $o['colors'] ? esc($o['colors']) : '—'; ?></span>
              </div>
            </div>

            <?php if (!empty($o['details'])): ?>
              <div class="detail-notes">
                <span class="dl">Details</span>
                <p><?php echo nl2br(esc($o['details'])); ?></p>
              </div>
            <?php endif; ?>

            <?php if (!empty($o['reply_message'])): ?>
              <div class="detail-reply-sent">
                <span class="dl">Your last reply<?php echo !empty($o['replied_at']) ? ' — ' . esc(formatDate(['created_at' => $o['replied_at']])) : ''; ?></span>
                <p><?php echo nl2br(esc($o['reply_message'])); ?></p>
              </div>
            <?php endif; ?>

            <div class="reply-box">
              <label for="reply-<?php echo $orderId; ?>">Send a reply</label>
              <textarea id="reply-<?php echo $orderId; ?>" class="reply-textarea" rows="4" placeholder="Type your reply — it'll be emailed to <?php echo esc($o['email']); ?>"></textarea>
              <div class="reply-actions">
                <button type="button" class="btn-send-reply">Send Reply</button>
                <button type="button" class="btn-mark-replied">Mark as Replied (no email)</button>
                <span class="reply-status" aria-live="polite"></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    <?php endif; ?>

  </div>
</main>

<script>
  const CSRF_TOKEN = <?php echo json_encode($_SESSION['csrf_token']); ?>;

  document.querySelectorAll('.message-summary').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.message-card');
      const open = card.classList.toggle('open');
      btn.setAttribute('aria-expanded', open);
    });
  });

  async function sendToServer(orderId, action, replyMessage, statusEl, card) {
    statusEl.textContent = action === 'reply' ? 'Sending…' : 'Saving…';
    statusEl.className = 'reply-status';

    try {
      const res = await fetch('reply.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
          order_id: orderId,
          action: action,
          reply_message: replyMessage,
          csrf_token: CSRF_TOKEN
        })
      });
      const data = await res.json();

      if (!data.success) {
        statusEl.textContent = data.message || 'Something went wrong.';
        statusEl.classList.add('is-error');
        return;
      }

      statusEl.textContent = data.message || 'Done!';
      statusEl.classList.add('is-success');

      const badge = card.querySelector('.ms-status');
      badge.textContent = 'Replied';
      badge.className = 'ms-status status-replied';

    } catch (err) {
      statusEl.textContent = 'Network error — please try again.';
      statusEl.classList.add('is-error');
    }
  }

  document.querySelectorAll('.btn-send-reply').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.message-card');
      const orderId = card.dataset.orderId;
      const textarea = card.querySelector('.reply-textarea');
      const statusEl = card.querySelector('.reply-status');
      const message = textarea.value.trim();

      if (!message) {
        statusEl.textContent = 'Write a reply first.';
        statusEl.className = 'reply-status is-error';
        return;
      }

      sendToServer(orderId, 'reply', message, statusEl, card);
    });
  });

  document.querySelectorAll('.btn-mark-replied').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.message-card');
      const orderId = card.dataset.orderId;
      const textarea = card.querySelector('.reply-textarea');
      const statusEl = card.querySelector('.reply-status');

      sendToServer(orderId, 'mark_replied', textarea.value.trim(), statusEl, card);
    });
  });
</script>

</body>
</html>
