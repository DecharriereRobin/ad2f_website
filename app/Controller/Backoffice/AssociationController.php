<?php

namespace Controller\Backoffice;
use \W\Controller\Controller;
use Model\AssociationModel as Assoc;

class associationController extends Controller
{
	/**
	 * Affichage le profil de l'association
	 */
    public function showAssociation(){
	//	$this->allowTo('admin');
		$associations = new Assoc();
		$this->show('backoffice/associationView', ['associations' => $associations->findAll()]);
	}// fin public function showAdmin


	/**
	 * Editer l association
	 */

	public function edit($id)
	{
		//$this->allowTo('admin');
		$association = new Assoc();
		$message="";
        //Editer la table
		if(isset($_POST['EditProfil'])){
            if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['ZIP_code']) && !empty($_POST['city']) && !empty($_POST['phone'])) {
                // Ajout à la bdd
                $association->update([
                    'name' => trim($_POST['name']),
                    'address' => trim($_POST['address']),
                    'ZIP_code' => trim($_POST['ZIP_code']),
                    'city' => trim($_POST['city']),
                    'phone' => trim($_POST['phone']),
                ],$id,true);
				//redirection vers page de vue
				//$this->redirectToRoute('backoffice_AdminView');
				$message = "<div class='alert alert-success'>Le profil de l'association a été modifié</div>";
				}else{
					$message = "<div class='alert alert-danger'>Le profil de l'association n'a pas été modifié.</div>";
				}
			}
	//	afficher la vue
	$this->show('backoffice/associationEdit', ['association' => $association->find($id), 'message'=>$message]);

	}


} // fin class associationControler
