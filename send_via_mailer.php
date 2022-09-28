<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';

if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

	$mail = new PHPMailer(true);
	try {

		// $mail->SMTPDebug = 2;									
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';											
		$mail->Host	 = 'smtp.mailtrap.io';					
		$mail->SMTPAuth = true;							
		$mail->Username = 'a122fa950f97c9';				
		$mail->Password = 'dd8e6baa1fb402';						
		$mail->Port	 = 2525;
	
		$mail->setFrom($email, $name);		
		$mail->addAddress('guillaume.boquet@gmail.com', 'Guillaume Boquet');
		$mail->isHTML(true);								
		$mail->Subject = 'Nouveau message de la part de ' . $name;
		$mail->Body = $message;
		$mail->AltBody = $message;
		$mail->send();
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}


?>





