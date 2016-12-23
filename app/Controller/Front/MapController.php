<?php
namespace Controller\Front;
use \W\Controller\Controller;
use \Model\placeModel as Place;

class MapController extends \W\Controller\Controller
{
    public function showMap()
    {
        $places = new Place();
		$this->show('front/map', ['places' => $places->findAll($orderBy = 'categorie')]);
    }

    public function showcategorie()
    {   $places = new Place();
        $place = new Place();
        $cat = new Place();
        $categorie='sport';

        if(isset($_GET['categorie'])){
            $categorie = $cat->getPlaceByCategorie('sport');

            //var_dump($categorie);
        }
        $this->show('front/map/', ['place' => $categorie->getPlaceByCategorie('sport'), 'places' => $places->findAll($orderBy = 'categorie')]);

    }

    public function Json()
    {
        $places = new Place();
        echo json_encode($places->findAll());
    }
    public function JsonbyID($id)
    {
        $places = new Place();
        echo json_encode($places->find($id));
        $this->redirectToRoute('map_Show');
    }



}
