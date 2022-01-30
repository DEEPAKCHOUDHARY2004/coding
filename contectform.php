<form action="./sendmail.php" method="post" name="contactform" id="contactform" class="animated out" data-animation="fadeInUp" data-delay="0">

                  <fieldset>
                    <div class="form-group">
                      <input class="form-control br-b" type="text" name=" name" id="name" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
                      <!-- <label for="country">Country</label>
                    <select id="country" name="country">
                      <option value="australia">Australia</option>
                      <option value="canada">Canada</option>
                      <option value="usa">USA</option>
                      <option value="India">India</option>
                    </select> -->
                  
                      </div>

                    <div class="form-group">
                      <input class="form-control br-b" type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control br-b" name="message" id="message" placeholder="Message..."></textarea>
                    </div>
                  </fieldset>
                  
                  <!-- submit button -->
                  <div class="form-group">
                    <input type="submit" name="submit" value="Send message" id="submit" class="btn btn-sm btn-dark">
                  </div>

                  <div id="alert"></div>

                </form>
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
      $email = $_post['email'];
    $name = $_post['name'];
    $msg = $_POST['message'];
     

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try{

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
    $mail->setFrom('deepak.livechek1999@gmail.com','codeland');
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
    $mail->Subject = 'contect us';
    $mail->Body    = "name: $name <br> email: $email<br> massege:$msg";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
       $mail->send();
       echo "<script> alert(' Your Message has been sent successfully')</script>";
       
        
       } catch(Exception $e) {
        echo " <script> alert('Mailer Error:  {$mail->ErrorInfo}')</script>";
        
    }
}

 ?>