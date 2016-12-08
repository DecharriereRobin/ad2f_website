<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class EventDeleteController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function delete()
	{
		$this->show('backoffice/eventDelete');
	}

}
