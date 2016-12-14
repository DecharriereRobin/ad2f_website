<?php
namespace Controller\Backoffice;
use \W\Controller\Controller as Controller;
use Model\PlaceModel as Place;

class PlaceController extends Controller
{

    public function placeView(){
        //$this->allowTo('admin');
		$places = new Place();

		$this->show('backoffice/PlaceView', ['places' => $places->findAll()]);
    }
    public function create()
    {
        //$this->allowTo('admin');
        $message = "";
        $places = new Place;
        // Insertion de la table
        if(isset($_POST['createPlace'])){
            if(!empty($_POST['titre']) && !empty($_POST['content']) && !empty($_POST['address']) && !empty($_POST['categorie']) ){
                // Ajout à la bdd
                $places->insert([
                    'titre' => trim($_POST['titre']),
                    'content' => $_POST['content'],
                    'address' => $_POST['address'],
                    'categorie' =>  $_POST['categorie'],
                ],true);

                $message = "<div class='alert alert-success'>Le nouveau lieu a bien été crée.</div>";
                }else{
                    $message = "<div class='alert alert-danger'>Le nouveau lieu du CA n'a pas été créé.</div>";
                }
                //$this->redirectToRoute('backoffice_AdminView');
        }
        $this->show('backoffice/placeCreate', ['message'=>$message]);
    } // fin public function create

    public function placeDelete($id)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $place = new Place();
        $place->delete($id);
		$this->redirectToRoute('backoffice_placeView');
	}
    public function placeEdit($id)
	{
		//$this->allowTo('admin');
		$place = new Place();
		$message="";
        //Editer la table
		if(isset($_POST['Editplace'])){
            if(!empty($_POST['titre']) && !empty($_POST['content']) && !empty($_POST['address']) && !empty($_POST['categorie'])) {
                // Ajout à la bdd
                $place->update([
                    'titre' => trim($_POST['titre']),
                    'content' => $_POST['content'],
                    'address' => $_POST['address'],
                    'categorie' =>$_POST['categorie']
                ],$id,true);
				//redirection vers page de vue
				//$this->redirectToRoute('backoffice_AdminView');
				$message = "<div class='alert alert-success'>Le lieu a bien été modifié.</div>";
				}else{
					$message = "<div class='alert alert-danger'>Le lieu n'a pas été modifié.</div>";
				}
			}
	//	afficher la vue
	$this->show('backoffice/placeEdit', ['place' => $place->find($id), 'message'=>$message]);

	}


}// fin Class
