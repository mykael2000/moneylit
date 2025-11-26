<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# from /home/petevpcc/moneylitafrica.com
echo "PWD: $(pwd)"
echo "---- find PHPMailer.php ----"
find vendor -type f -iname PHPMailer.php -print -exec ls -l {} \;
echo "---- find SMTP.php ----"
find vendor -type f -iname SMTP.php -print -exec ls -l {} \;
echo "---- find Exception.php ----"
find vendor -type f -iname Exception.php -print -exec ls -l {} \;

?>
