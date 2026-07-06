<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__ . '/includes/auth-config.php';

// Already logged in? Go straight to the dashboard.
if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if (!isset($_SESSION['login_attempts']))   $_SESSION['login_attempts'] = 0;
if (!isset($_SESSION['login_lock_until'])) $_SESSION['login_lock_until'] = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (time() < $_SESSION['login_lock_until']) {
        $wait = $_SESSION['login_lock_until'] - time();
        $error = "Too many attempts. Please wait {$wait} seconds and try again.";
    } else {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($username === ADMIN_USERNAME && password_verify($password, ADMIN_PASSWORD_HASH)) {
            session_regenerate_id(true);
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['login_attempts'] = 0;
            header('Location: dashboard.php');
            exit;
        }

        $_SESSION['login_attempts']++;
        if ($_SESSION['login_attempts'] >= 5) {
            $_SESSION['login_lock_until'] = time() + 60;
            $_SESSION['login_attempts'] = 0;
            $error = 'Too many attempts. Please wait 60 seconds and try again.';
        } else {
            $error = 'Incorrect username or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Staff Login — Mutende Crafts</title>
<link rel="icon" type="image/png" href="../images/image_1.png">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/admin.css">
</head>
<body class="admin-login-body">

  <div class="login-card">
    <img src="../images/image_1.png" alt="Mutende Crafts logo" class="login-logo">
    <h1>Staff Login</h1>
    <p class="login-sub">Sign in to view and reply to customer messages.</p>

    <?php if ($error): ?>
      <div class="login-error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="post" class="login-form">
      <div class="field">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" autocomplete="username" required autofocus>
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" autocomplete="current-password" required>
      </div>
      <button type="submit" class="login-btn">Log In</button>
    </form>

    <a href="../home.php" class="back-link">&larr; Back to the website</a>
  </div>

</body>
</html>
