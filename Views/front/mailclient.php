<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';





//Create an instance; passing `true` enables exceptions

function send($destinataire)
{
    
  echo  $destinataire ; 
 

$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->isSMTP();         //Send using SMTP
    $mail->SMTPDebug = 0;     //Enable  debug output
    $mail->Mailer = "smtp";   //Send using SMTP
    $mail->SMTPAuth   = true;     //Enable SMTP authentication
    $mail->SMTPSecure = 'tls';         //Enable implicit TLS encryption
    $mail->Host = "smtp.gmail.com";       //Set the SMTP server to send through
    $mail->Port       = 587;           //TCP port to connect to
    
    $mail->SMTPOptions = array(   //solution to Problem With The Latest Version Of PHP
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

     
 
    $mail->Username   = 'rihem.omrani@esprit.tn';                    
    $mail->Password   = 'raafet01';          //SMTP password
 
 
    //sender
    $mail->setFrom('rihem.omrani@esprit.tn', 'Phamaland');
    
    
      //Recipients
    $mail->addAddress($destinataire);              



 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'votre login';
    $mail->Body    = ' <b>merci !</b>';
  

    if ( $mail->Send()) { 
      header('Location: index.php');//echo "Message Sent!";            
  }
   
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
