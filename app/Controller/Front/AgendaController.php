<?php

namespace Controller\Front;

use \W\Controller\Controller;

class AgendaController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showSoon()
	{
		$this->show('front/agendaSoon');
	}

	public function showMeeting()
	{
		$this->show('front/agendaMeeting');
	}


}
