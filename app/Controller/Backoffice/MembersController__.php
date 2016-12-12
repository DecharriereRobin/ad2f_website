<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class MembersController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function liste()
	{
		$this->show('backoffice/membersList');
	}

	public function edit()
	{
		$this->show('backoffice/membersEdit');
	}



}
