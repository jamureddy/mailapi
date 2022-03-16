<?php
/*
//sensing mail for verification
require './mailer/class.phpmailer.php';
require './mailer/PHPMailerAutoload.php';
require './mailer/class.smtp.php';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'balu2001gmaps@gmail.com';                 // SMTP username
$mail->Password = '9490177554';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('balu2001gmaps@gmail.com', 'Teksitus');

$mail->addAddress("balu2001gmaps@gmail.com", 'User');     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Confirm Account || Teksitus';
$mail->Body    = '

<div style="width:100%;background-color:white;padding:5px;border:1px solid black;">
  <img src="https://res.cloudinary.com/dwahdqsxe/image/upload/v1621490282/mainLogo_d9qyvf.png" style="width:10%;display: block;margin-left: auto;margin-right: auto;"/>
  <hr>
      <p style="color:green;font-weight:bold;">
          Thanks for creating an account in Teksitus,click on below link to verify
          </p>
          <center><a href="' . $base . '"><button style="color:black;background-color:#4ed9f5;border:none;padding:10px;">Verify My Account</button></a></center>
           <p>If you are facing to verify your account from above button you can copy the following link and paste it in browser..</p>
          <p>' . $base . '</p>
          <hr>
          <div style="text-align:center;">
              <p>Copyrights @ Teksitus</p>
              <p style="color:blue;font-weight:bold;"><a href="teksitus.com">www.teksitus.com</a></p>
          </div>
          
         
  
</div>

';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 echo "send";
}
*/
require "./mailer/class.phpmailer.php";
echo "working";

?>