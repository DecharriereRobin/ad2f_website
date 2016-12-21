<?php

namespace Controller\Front;

use \W\Controller\Controller;
use Model\EventsModel as Event;
use Model\MediaModel  as Media;
use Model\GarageModel as Garage;


class EventViewerController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function showCarnaval()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/evenements/carnaval', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );
	}

	public function showBlockParty()
	{
		$event = new Event();
		$media = new Media();
		$category = "carnaval";

		$this->show('front/evenements/blockparty', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );

	}

    public function showSaturdayMorning()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/evenements/saturdayMorning', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );
	}

	public function showGarage()
	{
		$event = new Event();
		$media = new Media();


		$this->show('front/evenements/garage', ['events' => $event->findAll($orderBy = 'date'), 'media' => $media] );

	}

    public function subscribeGarage()
	{
		var_dump($_POST);
		$garages = new Garage();
        $message = "";
        if(isset($_POST['subscribeGarage'])){
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['reservedmeters']) && !empty($_POST['adhesion'])){
            $garages->insert([
            'firstname' => trim($_POST['firstname']),
            'lastname' => trim($_POST['lastname']),
            'address' => trim($_POST['address']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
			'reservedmeters' => trim($_POST['reservedmeters']),
			'adhesion' => trim($_POST['adhesion']),
            ],true);
            $message = "<div class='alert alert-success'>Vous vous êtes bien inscrit à la braderie.</div>";
            }else{
            $message = "<div class='alert alert-danger'>Votre inscription n'est pas reussit</div>";
            }

        }

		$this->show('front/participer/garageSubcribe', ['message'=>$message]);
	}

}
