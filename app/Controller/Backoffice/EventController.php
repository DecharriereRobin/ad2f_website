<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class EventController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function liste()
	{
		$this->show('backoffice/eventList');
	}

	public function create()
	{
		$this->show('backoffice/eventCreate');
	}

	public function edit()
	{
		$this->show('backoffice/eventEdit');
	}

	public function delete()
	{
		$this->show('backoffice/eventDelete');
	}


}
