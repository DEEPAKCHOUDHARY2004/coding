<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('mailer/Exception.php');
require ('mailer/SMTP.php');
require ('mailer/PHPMailer.php');

  if(isset($_POST['submit'])){
      $to = $_post['email'];
    $subject = $_post['name'];
    $msg = $_POST['message'];
     

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'deepak.livechek1999@gmail.com';                     //SMTP username
    $mail->Password   = 'Deepak@2004';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($to);
    $mail->addAddress('deepak.livechek1999@gmail.com');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('deepak.livechek1999@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
      if( $mail->send()){
       echo "<script> alert(' Your Message has been sent successfully')</script>";
       
        
 } else {
        echo " <script> alert('Mailer Error:  {$mail->ErrorInfo}')</script>";
        
    }
}

 ?>