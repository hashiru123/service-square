<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Square - Contact Us</title>
  <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <script src="/bootstrap/js/bootstrap.bundle.js"></script>
  <script rel="stylesheet" src="/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>

  <!-- navbar start -->
  <nav class="navbar navbar-expand-xl sticky-top">
    <img class="header-shadow" src="/assets/images/header-shadow.png" alt="shadow">
    <div class="container-fluid px-5 py-3 d-flex justify-content-between align-items-center">
      <div class="logo"><a class="navbar-brand" href="index.html"><img src="/assets/images/logo1.svg" alt="logo"></a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="links">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> -->
            <li class="nav-item">
              <a class="nav-link active" href="contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <form class="d-flex header-social-wrapper" role="search">
          <div class="header-social d-flex">
            <a href="https://www.facebook.com/profile.php?id=100024313282542&mibextid=LQQJ4d" target="_blank"><img
                src="/assets/icons/fb.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/twitter.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/insta.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/in.png" alt="icon"></a>
          </div>
          <div class="header-btn d-flex justify-content-center">
            <a href="tel:0401967967"><img src="/assets/icons/header-call.png" alt="icon"><span>0401967967</span></a>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->

  <!-- contact us banner start -->
  <section class="overflow-hidden">
    <div class="container-fluid p-0 m-0">
      <div class="row">
        <div class="col-12">
          <img src="/assets/images/contact us Banner-min.png" class="img-fluid" alt="banner">
        </div>
      </div>
    </div>
  </section>
  <!-- contact us banner end -->

  <!-- form section start -->
  <section class="py-5">
    <div class="container-fluid px-5">
      <div class="row py-5">
        <div class="col-md-7">
          <h1 class="section-title">Get in Touch with Us For Free Consultation!</h1>
          <p class="section-para pt-3">We're here to help you! Whether you have questions, need advice, or are ready to
            start your project, our team is ready to provide you with the support you need. Your journey towards success
            starts with a simple conversation.</p>
        </div>
        <div class="col-md-5">
          <form action="#" method="post">

            <div class="form-control border-0 mb-3">
              <label for="name" class="mb-1">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Input Your Name Here" required>
            </div>
            <div class="form-control border-0 mb-3">
              <label for="email" class="mb-1">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Input Your Email Here"
                required>
            </div>
            <div class="form-control border-0 mb-3">
              <label for="message" class="mb-1">Message</label>
              <textarea name="message" id="message" name="message" class="form-control"
                placeholder="Input Your Message Here" required></textarea>
            </div>
            <button type="submit" id="submit" name="send" onclick="sendEmail()" class="submit-btn ms-3">Send Message</button>
          </form>
          <div id="response"></div>s
        </div>
      </div>
    </div>
  </section>
  <!-- form section end -->

  <!-- footer section start -->
  <footer class="position-relative ">
    <img class="footer-shadow" src="/assets/images/footer-shadow.png" alt="shadow">
    <div class="container-fluid px-5">
      <div class="row flex-wrap d-flex">
        <div class="col-xl-2 col-lg-3 col-md-12 col-12 footer-logo logo"><img src="/assets/images/logo1.svg" alt="logo">
        </div>
        <div class="col-xl-8 col-lg-9 col-md-12 col-12 footer-info d-flex">
          <div class="in-touch">
            <h3>Get In Touch</h3>
            <!-- <a href="#" class="d-flex align-items-center gap-3"><img src="/assets/icons/footer-location.png"
                alt="icon"><span>4517 Washington Manchester,
                Kentucky 39495</span></a> -->
          </div>
          <div class="line"></div>
          <div class="call">
            <a href="tel:040 1-967-967" class="d-flex align-items-center gap-3"><img src="/assets/icons/footer-call.png"
                alt="icon"><span>0401967967</span></a>
          </div>
          <div class="line"></div>
          <div class="mail">
            <a href="mailto:Info@servicesquare.com.au" class="d-flex align-items-center gap-3"><img
                src="/assets/icons/footer-mail.png" alt="icon"><span>Info@servicesquare.com.au</span></a>
          </div>
        </div>
        <div class="col-xl-2 col-lg-12 col-md-12 col-12 footer-social d-flex align-items-end">
          <div class="header-social d-flex align-items-center">
            <a href="https://www.facebook.com/profile.php?id=100024313282542&mibextid=LQQJ4d" target="_blank"><img
                src="/assets/icons/fb.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/twitter.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/insta.png" alt="icon"></a>
            <a href="#"><img src="/assets/icons/in.png" alt="icon"></a>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="cop-right d-flex">
          <p>Service Square, 2024. All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
  <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top d-flex align-items-center justify-content-center"
    role="button"><img src="/assets/icons/up.png" alt="icon"></a>
  </script>
</body>

</html>


<?php

if(isset($_POST['send']))
{
  $name = $_POST['name'];
  $name = $_POST['email'];
  $name = $_POST['message'];

  require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer;

//$mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;  // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kashifwaheed1000@gmail.com';                 // SMTP username
$mail->Password = 'fpio issa vfuj afbe';                           // SMTP password
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('kashifwaheed1000@gmail.com', 'Contact-From');
$mail->addAddress('kashifwaheed1000@gmail.com', 'ServiceSquare');     // Add a recipient
$mail->addAddress('kashifwaheed1000@gmail.com');               // Name is optional
$mail->addReplyTo('kashifwaheed1000@gmail.com', 'Information');

// Add attachments if needed
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> message - $message";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
?>