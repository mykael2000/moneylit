<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load PHPMailer via Composer
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    header("Location: index.php?error=" . urlencode("Method Not Allowed"));
    exit;
}

// Sanitize form input
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate
$errors = [];

if ($name === '' || strlen($name) < 2) {
    $errors[] = "Please enter your name.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}

if ($message === '' || strlen($message) < 5) {
    $errors[] = "Message must be at least 5 characters.";
}

// If errors exist, return a response
if (!empty($errors)) {
    header("Location: index.php?error=" . urlencode($errors));
    exit;
}

try {
    $mail = new PHPMailer(true);

    // SMTP configuration — Update this section!
    $mail->isSMTP();
    $mail->Host       = 'mail.moneylitafrica.com';  
    $mail->SMTPAuth   = true;
    $mail->Username   = 'support@moneylitafrica.com'; 
    $mail->Password   = 'YOUR_SMTP_PASSWORD';  // <-- Replace
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // 'ssl'
    $mail->Port       = 465;

    // Email headers
    $mail->setFrom('support@moneylitafrica.com', 'Website Contact Form');
    $mail->addAddress('support@moneylitafrica.com', 'Admin'); 
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New Contact Message from $name";
    $mail->Body = "
        <h2>New Contact Message</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    $mail->send();

    header("Location: success.php?sent=1");
    exit;

} catch (Exception $e) {
    header("Location: index.php?error=" . urlencode("Message could not be sent."));
    exit;
}

?>
