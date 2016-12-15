<?php

namespace Controller\Front;

use \W\Controller\Controller as Controller;
use Model\MemberModel as Member;
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
		$this->show('front/contact', ['associations' => $associations->findAll(), 'message' => $message]);

	}


	public function adhesion()
	{
		$member = new Member();

		// Variables to diplay error
		$message = "";
		$errorMessages = [];
		$errorClass = [];

		if(isset($_POST['adhesion']))
		{

			$errorMessages = [];

			if (empty($_POST['firstname'])) {
				$errorMessages[] = 'Le nom est obligatoire. Merci de l\'indiquer.';
				$errorClass['firstname'] = 'has-error';
			}

			if (empty($_POST['lastname'])) {
				$errorMessages[] = 'Le prénom est obligatoire. Merci de l\'indiquer.';
				$errorClass['lastname'] = 'has-error';
			}

			if (empty($_POST['address'])) {
				$errorMessages[] = 'L\'adresse est obligatoire. Merci de l\'indiquer.';
				$errorClass['address'] = 'has-error';
			}

			if (empty($_POST['email'])) {
				$errorMessages[] = 'L\' email est obligatoire. Merci de l\'indiquer.';
				$errorClass['email'] = 'has-error';
			}

			if(count($errorMessages)== 0){
				$email = $_POST['email'];
				$existsEmail = $member->emailMemberExists($email);


				if($existsEmail == 0){

					$member->insert([
						'firstname'    => trim($_POST['firstname']),
						'lastname'     => trim($_POST['lastname']),
						'address'      => trim($_POST['address']),
						'phone'        => $_POST['phone'],
						'email'        => $_POST['email'],
						'creation_date'=>(new \DateTime('now'))->format('Y-m-d'),
						'paid'         => 0

					], true);

					$message = "<div class='alert alert-success'>Vous avez adhérer à l'association. Il ne vous reste plus qu'a regler la participation
					forfaitaire pour valider votre adhésion</div>";
				}
				else {
					$message = "<div class='alert alert-danger'>Cet email existe déjà. Êtes vous déjà membres ?</div>";
				}

			} else{
				$message = "<div class='alert alert-danger'>Vous n'avez pas pu vous réinscrire, il manque des informations</div>";
			}
		}

		$this->show('front/adhesion', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
	}



} // fin class
