<?php
if(isset($_GET['status'])=="true"){
    $temp_name=$_FILES['attachment_file']['tmp_name'];
    $file_name=$_FILES['attachment_file']['name'];

   

    $from_email = $_GET['from_mail'];
    $from_password = $_GET['from_password'];
    $to_email = $_GET['to_mail'];
    $subject = $_GET['subject'];
    $body = $_GET['body'];
    $from_user=$_GET['from_username'];
    $to_user=$_GET['to_username']; 
   


    require './mailer/class.phpmailer.php';
    require './mailer/PHPMailerAutoload.php';
    require './mailer/class.smtp.php';

    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 1;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $from_email;                 // SMTP username
    $mail->Password = $from_password;                           // SMTP password
    $mail->SMTPSecure = 'tls';
                     
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom($from_email,  $from_user);
    $mail->addAddress($to_email, $to_user);     // Add a recipient
    $mail->addAttachment($temp_name,$file_name);    

     
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
      
	    echo $mail->ErrorInfo;
         
    } else {
        $newURL="success.html";
       header('Location: '.$newURL);

       

    }


}

?>
 