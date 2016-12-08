<?php

namespace Controller\Backoffice;

use Model\MembersModel as Member;


class MembersController extends \W\Controller\Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function membersList()
	{
		$member = new Member();
		$this->show('backoffice/membersList',['member'=>$member->findAll()]);
	}

	public function membersEdit()
	{
		$this->show('backoffice/membersEdit');
	}



}
