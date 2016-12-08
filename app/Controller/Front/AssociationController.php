<?php

namespace Controller\Front;

use \W\Controller\Controller;

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
		$this->show('front/contact');
	}

	public function adhesion()
	{
		$this->show('front/adhesion');
	}

}
