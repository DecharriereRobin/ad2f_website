<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;


class GarageController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function liste()
	{
		$this->show('backoffice/garageList');
	}

	public function delete()
	{
		$this->show('backoffice/garageDelete');
	}

	public function edit()
	{
		$this->show('backoffice/garageEdit');
	}

}
