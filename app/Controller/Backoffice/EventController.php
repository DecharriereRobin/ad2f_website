<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class EventController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function eventList()
	{
		$this->show('backoffice/eventList');
	}

	public function eventCreate()
	{
		$this->show('backoffice/eventCreate');
	}

	public function eventEdit()
	{
		$this->show('backoffice/eventEdit');
	}

	public function eventDelete()
	{
		$this->show('backoffice/eventDelete');
	}


}
