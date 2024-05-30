<?php
require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer;

$mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;  // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kashifwaheed1000@gmail.com';                 // SMTP username
$mail->Password = 'fpio issa vfuj afbe';                           // SMTP password
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('kashifwaheed1000@gmail.com', 'Mailer');
$mail->addAddress('kashifwaheed1000@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('kashifwaheed1000@gmail.com');               // Name is optional
$mail->addReplyTo('kashifwaheed1000@gmail.com', 'Information');

// Add attachments if needed
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
