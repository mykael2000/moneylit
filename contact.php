<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>PHPMailer debug</h2>";
$base = __DIR__;
echo "<p>Base dir: " . htmlspecialchars($base) . "</p>";

$autoload = $base . '/vendor/autoload.php';
echo "<p>Checking autoload at: <code>$autoload</code></p>";
if (file_exists($autoload)) {
    echo "<p style='color:green'>autoload.php FOUND</p>";
    require_once $autoload;
} else {
    echo "<p style='color:red'>autoload.php NOT FOUND</p>";
    exit;
}

// Check composer packages listing for phpmailer
$pmPath = $base . '/vendor/phpmailer/phpmailer';
echo "<p>PHPMailer package path: <code>$pmPath</code></p>";
if (is_dir($pmPath)) {
    echo "<p style='color:green'>phpmailer directory FOUND</p>";
    echo "<p>Listing files:</p><ul>";
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pmPath));
    $count = 0;
    foreach ($it as $file) {
        if ($file->isFile()) {
            $rel = str_replace($base . '/', '', $file->getPathname());
            echo "<li>" . htmlspecialchars($rel) . "</li>";
            $count++;
        }
    }
    if ($count === 0) echo "<li>(no files found)</li>";
    echo "</ul>";
} else {
    echo "<p style='color:red'>phpmailer directory NOT found at expected location.</p>";
}

// Check the main class files
$files = [
    $base . '/vendor/phpmailer/phpmailer/src/PHPMailer.php',
    $base . '/vendor/phpmailer/phpmailer/src/SMTP.php',
    $base . '/vendor/phpmailer/phpmailer/src/Exception.php'
];

foreach ($files as $f) {
    echo "<p>Checking <code>$f</code>: ";
    if (file_exists($f)) {
        echo "<strong style='color:green'>FOUND</strong>";
        echo " — readable: " . (is_readable($f) ? "<strong style='color:green'>yes</strong>" : "<strong style='red'>no</strong>");
    } else {
        echo "<strong style='color:red'>MISSING</strong>";
    }
    echo "</p>";
}

// Check class existence via autoloader
$classes = [
    'PHPMailer\PHPMailer\PHPMailer',
    'PHPMailer\PHPMailer\SMTP',
    'PHPMailer\PHPMailer\Exception'
];

echo "<h3>class_exists checks</h3><ul>";
foreach ($classes as $c) {
    $exists = class_exists($c, true) ? "<strong style='color:green'>YES</strong>" : "<strong style='color:red'>NO</strong>";
    echo "<li>" . htmlspecialchars($c) . " : $exists</li>";
}
echo "</ul>";

// If classes not found, attempt manual require and check again
if (!class_exists('PHPMailer\PHPMailer\PHPMailer', false)) {
    echo "<h3>Attempting manual require of src files...</h3>";
    foreach ($files as $f) {
        if (file_exists($f)) {
            require_once $f;
            echo "<p>Required " . htmlspecialchars($f) . "</p>";
        }
    }
    echo "<h4>Re-check classes after manual require</h4><ul>";
    foreach ($classes as $c) {
        $exists = class_exists($c, true) ? "<strong style='color:green'>YES</strong>" : "<strong style='color:red'>NO</strong>";
        echo "<li>" . htmlspecialchars($c) . " : $exists</li>";
    }
    echo "</ul>";
}

echo "<p>PHP version: " . phpversion() . "</p>";
echo "<p>Loaded extensions: <code>" . implode(', ', get_loaded_extensions()) . "</code></p>";

echo "<p>Check Apache error log at: <code>" . htmlspecialchars($_SERVER['DOCUMENT_ROOT'] . '/xampp/apache/logs/error.log') . "</code> (path may vary)</p>";
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
