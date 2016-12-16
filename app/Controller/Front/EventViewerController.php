<?php

namespace Controller\Front;

use \W\Controller\Controller;
use Model\EventsModel as Event;
use Model\MediaModel  as Media;

class EventViewerController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showCarnaval()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/carnaval', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );
	}

	public function showBlockParty()
	{
		$event = new Event();
		$media = new Media();
		$category = "carnaval";

		$this->show('front/blockparty', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );

	}

    public function showSaturdayMorning()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/saturdayMorning', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );
	}

	public function showGarage()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/garage', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );

	}

    public function subscribeGarage()
	{
		$this->show('front/garageSubcribe');
	}

}
