<?php
require __DIR__ . '/includes/guard.php';
require __DIR__ . '/../db_config.php';

header('Content-Type: application/json');

function respond($success, $message, $extra = []) {
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $extra));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'])) {
    http_response_code(403);
    respond(false, 'Your session expired — please refresh the page and try again.');
}

$orderId      = (int)($_POST['order_id'] ?? 0);
$action       = $_POST['action'] ?? 'reply'; // 'reply' or 'mark_replied'
$replyMessage = trim($_POST['reply_message'] ?? '');

if ($orderId <= 0) {
    respond(false, 'Missing message ID.');
}

try {
    $stmt = $pdo->prepare('SELECT * FROM orders WHERE id = :id');
    $stmt->execute([':id' => $orderId]);
    $order = $stmt->fetch();
} catch (PDOException $e) {
    respond(false, 'Could not find that message. (' . $e->getMessage() . ')');
}

if (!$order) {
    respond(false, 'That message no longer exists.');
}

$emailSent = null;

if ($action === 'reply') {
    if ($replyMessage === '') {
        respond(false, 'Please write a reply message before sending.');
    }

    $customerName = $order['name'] ?: 'there';
    $subject = 'Re: Your Mutende Crafts order request';
    $bodyLines = [
        "Hi {$customerName},",
        '',
        $replyMessage,
        '',
        '— Mutende Crafts',
    ];
    $body = implode("\r\n", $bodyLines);

    $headers = [
        'From: Mutende Crafts <no-reply@mutendecrafts.com>',
        'Reply-To: mutendecrafts25@gmail.com',
        'Content-Type: text/plain; charset=UTF-8',
    ];

    $emailSent = @mail($order['email'], $subject, $body, implode("\r\n", $headers));
}

try {
    $stmt = $pdo->prepare(
        'UPDATE orders SET status = :status, reply_message = :reply_message, replied_at = NOW() WHERE id = :id'
    );
    $stmt->execute([
        ':status'        => 'replied',
        ':reply_message' => $replyMessage !== '' ? $replyMessage : ($order['reply_message'] ?? null),
        ':id'            => $orderId,
    ]);
} catch (PDOException $e) {
    respond(false, "Couldn't save this — make sure admin/schema_update.sql has been run against the database. (" . $e->getMessage() . ')');
}

if ($action === 'reply') {
    respond(
        true,
        $emailSent
            ? 'Reply sent and saved!'
            : "Reply saved, but the email couldn't be sent — check the server's mail configuration."
    );
}

respond(true, 'Marked as replied.');
