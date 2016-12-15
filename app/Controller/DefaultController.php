<?php

namespace Controller;

use \W\Controller\Controller;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
        $model = new model;
		$this->show('default/home');
	}

}