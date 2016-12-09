<?php

namespace Controller\Backoffice;

use Model\MembersModel as Members;


class MembersController extends \W\Controller\Controller
{


	public function membersList()
	{
		$members = new Members();
		$this->show('backoffice/membersList',
			[
				// Retourne les caractérisitiques de tous les membres
				'members'=>$members->findAll('id'),
				'membersAsc'=>$members->findAll('firstname'),
				// Affiche le nombre de membres
				'sum'=>$members->countMembers(),
			]);

	}

	public function membersCreate()
	{
		//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
		$message = "";
		$member = new Members();
		if(isset($_POST['createEvent'])){
			if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date']) && !empty($_POST['category'])){

				$member->insert([
					'firstname' 		=> trim($_POST['firstname']),
					'name'    			=> trim($_POST['name']),
					'address' 			=> trim($_POST['address']),
					'phone'   			=> trim($_POST['phone']),
					'email'   			=> trim($_POST['email']),
					'paid'    			=> trim($_POST['paid']),
					'creation_date'     => $_POST['creation_date'],
					'subscription_date' => $_POST['subscription_date']
				], $id, true);

				$message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";
			}else{
				$message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
			}
		}

		$this->show('backoffice/MembersCreate', ['message'=>$message]);

	}


	public function membersEdit($id)
	{
		//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
		$message = "";
		$member = new Members();
		if (isset($_POST['editMember'])) {
			if (!empty($_POST['address']) || !empty($_POST['phone']) || !empty($_POST['email']) || !empty($_POST['paid']))
			{

				$member->update([
					'address' => trim($_POST['address']),
					'phone' => trim($_POST['phone']),
					'email' => trim($_POST['email']),
				], $id, true);

				$message = "<div class='alert alert-success'>Le membre a bien été modifié.</div>";
				$this->redirectToRoute('backoffice_MembersList');
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

		$this->show('backoffice/membersEdit', ['member' => $member->find($id), 'message'=>$message]);
	}

	public function membersDelete($id)
	{

		//$this->allowTo('admin'); // Only Admin User allowed for Back Office function
		$member = new Members();
		$member->delete($id);
		$_SESSION['message'] = "Test";
		$this->redirectToRoute('backoffice_MembersList');
	}


} // CLOSE CLASS MembersController
