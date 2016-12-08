<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class EventEditController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function edit()
	{
		$this->show('backoffice/eventEdit');
	}

}
