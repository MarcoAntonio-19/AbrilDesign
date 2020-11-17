<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['msg'];

  try{
    $mail->isSMTP();
    $mail->Host = 'mail.abrildesign.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = 'marco.antonio@abrildesign.com.br'; 
    $mail->Password = 'JW.FE3qhWgs7'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '25';

    

    $mail->setFrom('marco.antonio@abrildesign.com.br'); 
    $mail->addAddress('marco.correaskt@gmail.com'); 

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Nome : $name <br>Email: $email <br>Menssagem : $message</h3>";

    $mail->send();  
    $alert = '<div class="alert-success">
                 <span>Mensagem enviada!</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}


