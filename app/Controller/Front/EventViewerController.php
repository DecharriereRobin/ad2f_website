<?php

namespace Controller\Front;

use \W\Controller\Controller;

class EventViewerController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showCarnaval()
	{
		$this->show('front/evenements/carnaval');
	}

	public function showBlockParty()
	{
		$this->show('front/evenements/blockparty');
	}

    public function showSaturdayMorning()
	{
		$this->show('front/evenements/saturdayMorning');
	}

	public function showGarage()
	{
		$this->show('front/evenements/garage');
	}

    public function subscribeGarage()
	{
		$this->show('front/evenements/garageSubcribe');
	}

}
