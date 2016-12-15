<?php
namespace Controller\Front;
use \W\Controller\Controller;
use \Model\placeModel as Place;

class MapController extends \W\Controller\Controller
{
    public function showMap()
    {
        $places = new Place();
		$this->show('front/map', ['places' => $places->findAll()]);
    }

}
