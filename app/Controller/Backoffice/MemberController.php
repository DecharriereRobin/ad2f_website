<?php

namespace Controller\Backoffice;

use Model\MemberModel as Member;


class MemberController extends \W\Controller\Controller
{

		// Create a member
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

				if(count($errorMessages)== 0)
				{
					$email = $_POST['email'];
					$existsEmail = $member->emailMemberExists($email);

					if($existsEmail == 0){
						if($_POST['payment_status'] == "1")
						{
							$member->insert([
								'firstname'    => trim($_POST['firstname']),
								'lastname'     => trim($_POST['lastname']),
								'address'      => trim($_POST['address']),
								'phone'        => $_POST['phone'],
								'email'        => $_POST['email'],
								'creation_date'=>(new \DateTime('now'))->format('Y-m-d'),
								'paid'         => "1"
							], true);
							$message = "<div class='alert alert-success'>Le membre a bien été créé.</div>";
						}
						else{
							$member->insert([
								'firstname'    => trim($_POST['firstname']),
								'lastname'     => trim($_POST['lastname']),
								'address'      => trim($_POST['address']),
								'phone'        => $_POST['phone'],
								'email'        => $_POST['email'],
								'creation_date'=>(new \DateTime('now'))->format('Y-m-d'),
								'paid'         => "0"
							], true);
							$message = "<div class='alert alert-success'>Le membre a bien été créé.</div>";
						}
					}
					else
					{
						$message = "<div class='alert alert-danger'>Cet email existe déjà.</div>";
					}
				}
				else
				{
					$message = "<div class='alert alert-danger'>Le membre n'a pas été créé.</div>";
				}
			}

			$this->show('backoffice/MemberCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
		}

		// Member's List
		public function memberList($page=1)
		{
			$this->allowTo('admin'); // Only Admin User allowed for Back Office function
			$members = new Member();

			// Get all elements for Pagination
			$nbOfMember = $member->allEvent();
			$nbOfMemberByPage = 10;
			$maxPage = ceil($nbOfMember / $nbOfMemberByPage);
			$eventOffset = $nbOfMemberByPage * ($page - 1);


			// Check if requested page is out of limits and redirect to previous or to the first page.
			if($page > $maxPage){
				$this->redirectToRoute('backoffice_MemberList', ['page' => $page-1]);
			} elseif($page == 0){
				$this->redirectToRoute('backoffice_MemberList');
			}

			
			$this->show('backoffice/member/memberList',
				[
					// Retourne les caractérisitiques de tous les membres
					'members'=>$members->findAll('id'),
					'membersAsc'=>$members->findAll('firstname'),
					// Affiche le nombre de membres
					'sum'=>$members->countMembers(),
				]);
		}

		// Edit a member
		public function memberEdit($id)
		{
			//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
			$member = new Member();

			$message = "";
			$errorMessages = 'TEST';

			if (isset($_POST['editMember']))
			{
				if (!empty($_POST['address']) && !empty($_POST['email']) && is_numeric($_POST['phone']) ) {
					$member->update([
						'firstname' => trim($_POST['firstname']),
						'lastname'  => trim($_POST['lastname']),
						'address'   => trim($_POST['address']),
						'phone'     => trim($_POST['phone']),
						'email'     => trim($_POST['email'])
					], $id, true);

					$message = "<div class='alert alert-success'>Le membre a bien été modifié.</div>";

					$uri = '../list';
					header("refresh:2;" . $uri);

					//$this->redirectToRoute('backoffice_MemberList');
				}
			}

			if (isset($_POST['validatePayment']))
			{

				$member->update([
					'paid' => 1
				], $id, true);

				$message = "<div class='alert alert-success'>Le membre a bien été modifié.</div>";
					$uri = '../list';
					header("refresh:3;" . $uri);

			}

			if (isset($_POST['cancelPayment']))
			{
				$member->update([
					'paid' => 0
				], $id, true);

				$message = "<div class='alert alert-danger'>Le statut de paiement a bien été annulé.</div>";

					$uri = '../list';
					header("refresh:2;" . $uri);

			}

			$this->show('backoffice/memberEdit', ['member' => $member->find($id), 'message'=>$message]);
		}


		// Delete a member
		public function memberDelete($id)
		{

			//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
			$member = new Member();
			$member->delete($id);
			$_SESSION['message'] = "Le membre a été supprimé avec succes.";

			$this->redirectToRoute('backoffice_MemberList');

		}


} // CLOSE CLASS MemberController
