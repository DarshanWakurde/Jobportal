<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include PHPMailer library
require 'email/src/Exception.php';
require 'email/src/PHPMailer.php';
require 'email/src/SMTP.php';
// Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    $mail->isSMTP(); 
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'wakurdedarshan@gmail.com';      // SMTP username
$mail->Password = 'xkxhhmqrrfvrstae';         // SMTP password
$mail->SMTPSecure = 'ssl';                       // Enable TLS encryption, 'ssl' also accepted
$mail->Port = 465; 
$mail->setFrom('wakurdedarshan@gmail.com'); // Sender's email and name
$mail->addAddress($_POST['email']); // Recipient's email and name
// $mail->addReplyTo('your-email@example.com', 'Your Name'); // Reply-to address
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = $_POST['subject']; // Email subject
$mail->Body = $_POST['body']; // Email body in HTML
// Send the email
$mail->send();
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '
    <html>
    <head>
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    </head>
      <style>
        body {
          text-align: center;
          padding: 40px 0;
          background: #EBF0F5;
        }
          h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size:20px;
            margin: 0;
          }
        i {
          color: #9ABC66;
          font-size: 100px;
          line-height: 200px;
          margin-left:-15px;
        }
        .card {
          background: white;
          padding: 60px;
          border-radius: 4px;
          box-shadow: 0 2px 3px #C8D0D8;
          display: inline-block;
          margin: 0 auto;
        }
      </style>
    
    <body>
    <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
      <h1>Successfully message sent</h1> 
      <p>Your Message Has Been Sent Successful!</p>
      <button><a href="apply.php">Find More candidates</a></button>
    </div>
  </body>
</html>';

}


// Set up SMTP
                                // Set mailer to use SMTP
               // Specify main and backup SMTP servers
                              // TCP port to connect to

// Set up email content

?>
