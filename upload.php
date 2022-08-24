<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$email = $_POST["email"];

$mail = new PHPMailer(true);
            
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'amartarocks4@gmail.com';                    
    $mail->Password   = 'vzdoubqaxxlynmyn';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('amartarocks4@gmail.com', 'Amarta Sarkar');

    $mail->addAddress($email);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'Form Submission';
    $mail->Body    = '<b> Thank you for your submission.</b>';

    $mail->send();
 ?>