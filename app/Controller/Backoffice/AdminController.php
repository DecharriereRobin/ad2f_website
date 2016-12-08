<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function create()
	{
		$this->show('backoffice/adminCreate');
	}

	public function forgot()
	{
		$this->show('backoffice/adminForgot');
	}

	public function login()
	{
		$this->show('backoffice/adminLogin');
	}

	public function logout()
	{
		$this->show('backoffice/adminLogout');
	}

}
