```php

use PHPMailer\PHPMailer\SMTP;
    // include_once("{$root}/vender/phpmailer/phpmailer/src/SMTP.php");
    
$gmail_smtp = true;

if ($gmail_smtp) {
      $mailer->isSMTP();
      $mailer->SMTPAuth = true;
      $mailer->Host = $SMTPHost;
      $mailer->Username = $SMTPUser;
      $mailer->Password = $SMTPPwd;
      $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mailer->SMTPDebug = 0;
      $mailer->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
      );
      $mailer->Port = 587;
}
```