<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';





//Create an instance; passing `true` enables exceptions

function sendConfirmation($destinataire,$pdf)
{
    
  echo  $destinataire ; 
  echo "je ne sais pas";

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

     
 
    $mail->Username   = 'rayen.benromdhane@esprit.tn';                    
    $mail->Password   = '201JFT2312';          //SMTP password
 
 
    //sender
    $mail->setFrom('rayen.benromdhane@esprit.tn', 'Pharmaland');
    
    
      //Recipients
    $mail->addAddress($destinataire);              
    $mail->addReplyTo('bromdhane.rayene@gmail.com', 'Information');


    //Attachments
    $mail->addStringAttachment($pdf,"thankyou.pdf");
 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'votre achat chez notre site';
    $mail->Body    = ' <b>merci pour votre achat!</b>';
  

    if ( $mail->Send()) { 
      header('Location: ajouterlivraison.html');//echo "Message Sent!";            
  }
   
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}


