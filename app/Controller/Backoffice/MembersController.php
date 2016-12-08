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

	public function membersEdit()
	{
		$this->show('backoffice/membersEdit');
	}

}
