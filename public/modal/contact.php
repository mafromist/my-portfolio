<?php
// contact.php - handles contact form submissions
// If you want to change the mail address, edit $to below (line 4)
$to = 'muge.alev@me.com'; // <-- CHANGE THIS TO YOUR EMAIL ADDRESS

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  header('Content-Type: application/json');
  echo json_encode(['ok' => false, 'message' => 'Method Not Allowed']);
  exit;
}

// Basic CORS support for local dev (optional)
if (isset($_SERVER['HTTP_ORIGIN'])) {
  header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
  header('Vary: Origin');
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  http_response_code(204);
  exit;
}

// Parse inputs (supports application/x-www-form-urlencoded and JSON)
$raw = file_get_contents('php://input');
$payload = null;
if (!empty($_SERVER['CONTENT_TYPE']) && stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
  $payload = json_decode($raw, true);
}

$name = trim($_POST['name'] ?? ($payload['name'] ?? ''));
$email = trim($_POST['email'] ?? ($payload['email'] ?? ''));
$message = trim($_POST['message'] ?? ($payload['message'] ?? ''));

header('Content-Type: application/json');

// Validate
$errors = [];
if ($name === '') { $errors['name'] = 'Name is required'; }
if ($email === '') {
  $errors['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = 'Invalid email address';
}
if ($message === '') { $errors['message'] = 'Message is required'; }

if (!empty($errors)) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'errors' => $errors, 'message' => 'Please fix the errors and try again.']);
  exit;
}

// Compose email
$subject = 'New message from portfolio contact form';
$body  = "You have a new message from your portfolio site.\n\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n\n";
$body .= "Message:\n{$message}\n";

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/plain; charset=UTF-8';
$headers[] = 'From: '.$name.' <'.$email.'>';
$headers[] = 'Reply-To: '.$name.' <'.$email.'>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
  echo json_encode(['ok' => true, 'message' => 'Your message has been received, We will contact you soon.']);
} else {
  http_response_code(500);
  echo json_encode(['ok' => false, 'message' => 'Failed to send email. Please try again later.']);
}

?>