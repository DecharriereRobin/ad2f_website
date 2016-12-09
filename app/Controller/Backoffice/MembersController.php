<?php

namespace Controller\Backoffice;

use Model\MembersModel as Members;

class MembersController extends Controller
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

	public function membersEdit()
	{
		$this->show('backoffice/membersEdit');
	}
    	public function membersCreate()
	{
		$members = new Members;
        // Insertion de la table
		if(isset($_POST['createMembers'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])){
                // Ajout à la bdd
                $admins = new Admins();
                $admins->insert([
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'address' => $_POST['address'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email']
             ]);
        }
	}
        }
}
