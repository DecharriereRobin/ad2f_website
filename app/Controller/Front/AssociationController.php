<?php

namespace Controller\Front;

use \W\Controller\Controller;
use Model\AssociationModel as Assoc;

class AssociationController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('front/home');
	}

	public function contact()
	{
		$associations = new Assoc();

		$message = "";
		if(isset($_POST['SendMail'])){ // Quand le formulaire est soumis
			//var_dump($_POST);
			// Envoi du mail
			$mail = new \PHPMailer();
			$mail->setFrom('vincentjenni@gmail.com', $_POST['firstname']);
			$mail->addAddress('vincentjenni@gmail.com');
			$mail->Subject = $_POST['subject'];
			$mail->Body = $_POST['message'];
			var_dump($mail->send());
			$message = "Votre question à bien été envoyé";
		}
		$this->show('front/association/contact', ['associations' => $associations->findAll(), 'message' => $message]);

	}


	public function adhesion()
	{
		$this->show('front/association/adhesion');
	}

}
