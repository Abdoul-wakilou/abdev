<?php
/* ces uses sont ajoutéés lorsque on declare un nouveau objet */
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/Exception.php";
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";

$mail = new PHPMailer(true);

try {
	// configuration
	$mail ->SMTPDebug = SMTP::DEBUG_SERVER;// j'veux les infos de debug

	// configuration de SMTP
	$mail ->isSMTP();
	$mail -> HOST = "localhost";
	$mail ->Port = 2004;

	// charset
	$mail ->CharSet = "utf-8";

	//destinataires
	$mail->addAddress("noforcingbakayoko@gmail.com");
	$mail->addCC("abdoul@gmail.com");
	$mail->addBCC("waki@site.fr");

	//expéditaire
	$mail->setFrom("abdoulwakiloutiga@gmail.com");

	//contenu
	$mail -> isHTML(); // pour envoyer du message sous forme de document html

	$mail->Subject = "Au sujet de votre demande";
	$mail->Body = "<p> Je suis <strong> Abdoul-Wakilou TIGA </strong></p>.<p> Etudiant en informatique de gestion, niveau licence 3 à l'Institut Universitaire de Technologie (IUT) de l'université de Parakou au Bénin, développeur web, développeur d'applications mobiles et développeur de logiciels.</p>";
	$mail ->AltBody = "Je suis Abdoul-Wakilou TIGA . Etudiant en informatique de gestion, niveau licence 3 à l'Institut Universitaire de Technologie (IUT) de l'université de Parakou au Bénin, développeur web, développeur d'applications mobiles et développeur de logiciels.";//pour lire le message si le logiciel ne lis pas les messages mail comme html

	// envoi
	$mail ->send();
	echo ("Message envoyé");

} catch (Exception $e) {
	echo ("Message non envoyé. Erreur : {$mail->ErrorInfo}");
}

?>