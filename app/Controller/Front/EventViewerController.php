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
		$this->show('front/carnaval');
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
		$this->show('front/garage');
	}

    public function subscribeGarage()
	{
		$this->show('front/garageSubcribe');
	}

}
