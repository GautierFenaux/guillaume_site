<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
require_once './config/database.php';

if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

	$mail = new PHPMailer(true);
	try {

		// $mail->SMTPDebug = 2;									
		$mail->isSMTP();
		// $mail->SMTPSecure = 'tls';
		$mail->CharSet = 'UTF-8';											
		$mail->Host = 'smtp.mailtrap.io';		
		$mail->SMTPAuth = true;							
		// $mail->Username = 'coach@guillaumeboquet-coaching.fr';				
		// $mail->Password = 'xguil24A!bp57';
		// $mail->Port	 = 587;
		$mail->Username = 'a122fa950f97c9';
		$mail->Password = 'dd8e6baa1fb402';
		$mail->Port	 = 2525;
		$mail->setFrom($email, $name);		
		$mail->addAddress('guillaume.boquet@gmail.com', 'Guillaume Boquet');
		$mail->isHTML(true);								
		$mail->Subject = 'Vous avez un nouveau message de la part de ' . $name;
		$mail->Body = $message;
		$mail->AltBody = $message;
		$mail->send();
		if ($mail->send()) {
				$stmt = $connexion->prepare("INSERT INTO contact (contact_name, email, message) VALUES (?, ?, ?)");
				$stmt->bind_param('sss', $name, $email, $message);
				$stmt->execute();
				$type = "success";
				$stmt->close();
				$connexion->close();
				header("Location:" . ROOT_URL  ."?checked=true");
		}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {test: $mail->ErrorInfo}";
		}
}

?>





