<?php

header('Content-Type: application/json');

require __DIR__ . '/db_config.php';

// ---- Where the order notification email should go ----
$OWNER_EMAIL = 'mutendecrafts25@gmail.com';

function respond($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

// Accept either normal form-encoded POST or JSON body
$input = $_POST;
if (empty($input)) {
    $raw = file_get_contents('php://input');
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $input = $decoded;
    }
}

$name    = trim($input['name']    ?? '');
$email   = trim($input['email']   ?? '');
$item    = trim($input['item']    ?? '');
$colors  = trim($input['colors']  ?? '');
$details = trim($input['details'] ?? '');

if ($name === '' || $email === '' || $item === '') {
    http_response_code(422);
    respond(false, 'Name, email, and item are required.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    respond(false, 'Please enter a valid email address.');
}

$name    = mb_substr($name, 0, 120);
$email   = mb_substr($email, 0, 150);
$item    = mb_substr($item, 0, 60);
$colors  = mb_substr($colors, 0, 120);
$details = mb_substr($details, 0, 2000);

try {
    $stmt = $pdo->prepare(
        'INSERT INTO orders (name, email, item, colors, details) VALUES (:name, :email, :item, :colors, :details)'
    );
    $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':item'    => $item,
        ':colors'  => $colors ?: null,
        ':details' => $details ?: null,
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    respond(false, 'Could not save your order. Please try again. (' . $e->getMessage() . ')');
}

$subject = "New Custom Order Request — {$name}";

$bodyLines = [
    "You've received a new order request from the website:",
    '',
    "Name: {$name}",
    "Email: {$email}",
    "Item: {$item}",
    'Colors: ' . ($colors !== '' ? $colors : '—'),
    '',
    'Details:',
    ($details !== '' ? $details : '—'),
];
$body = implode("\r\n", $bodyLines);

$headers = [
    'From: Mutende Crafts Website <no-reply@mutendecrafts.com>',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
];

$emailSent = @mail($OWNER_EMAIL, $subject, $body, implode("\r\n", $headers));

respond(true, 'Message sent successfully!' . ($emailSent ? '' : ' (Note: email notification could not be sent — check server mail configuration.)'));
