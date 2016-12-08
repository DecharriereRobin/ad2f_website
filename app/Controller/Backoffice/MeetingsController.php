<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class MeetingsController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function liste()
	{
		$this->show('backoffice/MeetingsList');
	}

	public function edit()
	{
		$this->show('backoffice/MeetingsEdit');
	}

    public function create()
	{
		$this->show('backoffice/MeetingsCreate');
	}

    public function delete()
	{
		$this->show('backoffice/MeetingsDelete');
	}



}
