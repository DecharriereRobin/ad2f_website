<?php
namespace Controller\Front;
use \W\Controller\Controller;
use \Model\placeModel as Place;

class MapController extends \W\Controller\Controller
{
    public function showMap()
    {

        $places = new Place();
        if(isset($_GET['essai'])){
            var_dump("essai");
        }
		$this->show('front/map', ['places' => $places->findAll($orderBy = 'categorie')]);
    }

    public function Json()
    {
        $places = new Place();
        echo json_encode($places->findAll());
    }



}
