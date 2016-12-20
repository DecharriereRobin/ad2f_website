<?php

namespace Controller\Front;

use \W\Controller\Controller as Controller;
use Model\AgendaModel as Agenda;

class AgendaController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showSoon()
	{
		$this->show('front/agenda/agendaSoon');
	}

	public function showMeeting()
	{
		$this->show('front/agenda/agendaMeeting');
	}

} // fin class
