<?php

namespace Controller\Front;

use \W\Controller\Controller;
use Model\EventsModel as Event;
use Model\MediaModel  as Media

class EventViewerController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showCarnaval()
	{   $event = new Event();

		$this->show('front/carnaval', ['events' => $event->findAll($orderBy = 'date')]);
	}

	public function showBlockParty()
	{
		$this->show('front/blockparty');
	}

    public function showSaturdayMorning()
	{
		$this->show('front/saturdayMorning');
	}

	public function showGarage()
	{
		$event = new Event();
		$this->show('front/garage', ['events' => $event->findAll($orderBy = 'date')]);

	}

    public function subscribeGarage()
	{
		$this->show('front/garageSubcribe');
	}

}
