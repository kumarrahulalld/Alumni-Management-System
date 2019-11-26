<?php

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "kumarrahul.allduniv@gmail.com";                 
$mail->Password = "Rm@0154772";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port =587;                                   
$mail->From = "kumarrahul.allduniv@gmail.com";
$mail->FromName = "CCE | ALUMNI ";
?>