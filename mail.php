<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php'; // Adjust the path as necessary
require 'PHPMailer/PHPMailer.php'; // Adjust the path as necessary
require 'PHPMailer/SMTP.php'; // Adjust the path as necessary

// Collect form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = 'abdullahkhattak193@gmail.com'; // SMTP email address
    $mail->Password   = 'gzwz rgyn vswi kmql';        // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption; ssl also accepted
    $mail->Port       = 587; // TCP port to connect to

    // Sender and recipient settings
    $mail->setFrom('abdullahkhattak193@gmail.com', 'hashir');
    $mail->addAddress('abdullahkhattak193@gmail.com', 'haider');

    // Email content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Contact Us Form';
    $mail->Body    = '<h1>Contact Form Submission</h1>
                      <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
                      <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
                      <p><strong>Message:</strong> ' . nl2br(htmlspecialchars($message)) . '</p>';

      // Send the email
      $mail->send();
      echo '<script>
              alert("Email has been sent successfully!");
              window.location.href = "contact-us.php"; 
            </script>';
  } catch (Exception $e) {
      echo '<script>
              alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");
              window.location.href = "contact-us.php"; 
            </script>';
  }
?>
