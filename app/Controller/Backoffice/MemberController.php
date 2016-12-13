<?php

namespace Controller\Backoffice;

use Model\MemberModel as Member;


class MemberController extends \W\Controller\Controller
{


        public function memberCreate()
        {
            //$this->allowTo('admin'); // Only Admin User allowed for Back Office function

            $member = new Member();

            // Variables to diplay error
            $message = "";
            $errorMessages = [];
            $errorClass = [];

            if(isset($_POST['createMember']))
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
							'paid'         =>$_POST['payment_status']
							
						], true);

						$message = "<div class='alert alert-success'>Le membre a bien été créé.</div>";
					}
					else {
						$message = "<div class='alert alert-danger'>Cet email existe déjà.</div>";
					}

				} else{
					$message = "<div class='alert alert-danger'>Le membre n'a pas été créé.</div>";
				}
			}

			$this->show('backoffice/MemberCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
		}
	
	public function memberList()
	{
		$members = new Member();
		$this->show('backoffice/memberList',
			[
				// Retourne les caractérisitiques de tous les membres
				'members'=>$members->findAll('id'),
				'membersAsc'=>$members->findAll('firstname'),
				// Affiche le nombre de membres
				'sum'=>$members->countMembers(),
			]);

	}


	public function memberEdit($id)
	{
		//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
		$member = new Member();
		$message = "";
		if (isset($_POST['editMember'])) {
			if (!empty($_POST['address']) || !empty($_POST['phone']) || !empty($_POST['email']) || !empty($_POST['paid']))
			{

				$member->update([
					'firstname' => trim($_POST['firstname']),
					'lastname'  => trim($_POST['lastname']),
					'address'   => trim($_POST['address']),
					'phone'     => trim($_POST['phone']),
					'email'     => trim($_POST['email'])
				], $id, true);

				$message = "<div class='alert alert-success'>Le membre a bien été modifié.</div>";
				$this->redirectToRoute('backoffice_MemberList');
			}
			else
			{
				$message = "<div class='alert alert-danger'>Le membre n'a pas été modifié.</div>";
			}
		}

		if (isset($_POST['validatePayment']))
		{
			$member->update([
				'paid' => 1
			], $id, true);

			$message = "<div class='alert alert-success'>Le statut de paiement a bien été validé.</div>";
		}
		else
		{
			$message = "<div class='alert alert-danger'>Le statut de paiement n'a pas été validé.</div>";
		}

		if (isset($_POST['cancelPayment']))
		{
			$member->update([
				'paid' => 0
			], $id, true);

			$message = "<div class='alert alert-success'>Le statut de paiement a bien été annulé.</div>";
		}
		else
		{
			$message = "<div class='alert alert-danger'>Le statut de paiement n'a pas été annulé.</div>";
		}

		$this->show('backoffice/memberEdit', ['member' => $member->find($id), 'message'=>$message]);
	}

	public function memberDelete($id)
	{

		//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
		$member = new Member();
		$member->delete($id);
		$_SESSION['message'] = "Le membre a été supprimé avec succes.";

		$this->redirectToRoute('backoffice_MemberList');

	}


} // CLOSE CLASS MemberController
