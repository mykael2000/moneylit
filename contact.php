<?php
// quick manual loader - temporary
$base = __DIR__;
$tried = [];

$paths = [
    $base . '/vendor/phpmailer/phpmailer/src/Exception.php',
    $base . '/vendor/phpmailer/phpmailer/src/PHPMailer.php',
    $base . '/vendor/phpmailer/phpmailer/src/SMTP.php',

    $base . '/vendor/phpmailer/phpmailer/PHPMailer/src/Exception.php',
    $base . '/vendor/phpmailer/phpmailer/PHPMailer/src/PHPMailer.php',
    $base . '/vendor/phpmailer/phpmailer/PHPMailer/src/SMTP.php',

    $base . '/vendor/phpmailer/phpmailer-master/src/Exception.php',
    $base . '/vendor/phpmailer/phpmailer-master/src/PHPMailer.php',
    $base . '/vendor/phpmailer/phpmailer-master/src/SMTP.php',
];

foreach ($paths as $p) {
    if (file_exists($p)) {
        require_once $p;
        error_log("PHPMailer loader: required $p");
    } else {
        $tried[] = $p;
    }
}

if (!class_exists('PHPMailer\PHPMailer\PHPMailer', false)) {
    error_log("PHPMailer loader: class still missing after trying paths: " . implode(', ', $tried));
    // You can optionally die with a friendly message while debugging:
    // die('PHPMailer class could not be loaded - check logs.');
}else{
    echo "success";
}
?>
