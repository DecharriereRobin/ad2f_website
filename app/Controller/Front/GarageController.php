<?php
namespace Controller\Backoffice;
use Model\GarageModel as Garage;
use \W\Controller\Controller;

class GarageController extends \W\Controller\Controller
{
    public function read()
	{
        $garages = new Garage();
        $message = "";
		$this->show('backoffice/garage/garageList', ['garages' => $garages->findAll()]);
	}

    public function create()
	{
        $garages = new Garage();
        $message = "";
        if(isset($_POST['createGarage'])){
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['phone'])){
            $garages->insert([
            'firstname' => trim($_POST['firstname']),
            'lastname' => trim($_POST['lastname']),
            'address' => trim($_POST['address']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
            ],true);
            $message = "<div class='alert alert-success'>Le participant est bien inscrit pour la braderie.</div>";
            }else{
            $message = "<div class='alert alert-danger'>Le participant n'a pas été inscrit pour la braderie.</div>";
            }
        }
        $this->show('backoffice/garage/garageCreate', ['message'=>$message]);
	}

    public function delete($id)
    {
            //$this->allowTo('admin'); // Only Admin User allowed for Back Office function and delete from agenda
            $garages = new Garage();
            $garages->delete($id);
            $this->redirectToRoute('backoffice_GarageList');
    }

	 public function edit($id)
    {
           //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
            $garages = new Garage();
            $message = "";
            if(isset($_POST['editGarage'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['email'])&&
            !empty($_POST['phone'])){
                $garages->update([
                    'firstname' => trim($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
                    'address' => trim($_POST['address']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']),
                    ],$id, true);
                $message = "<div class='alert alert-success'>La fiche du participant à la braderie a bien été modifiée.</div>";
                }else{
                $message = "<div class='alert alert-danger'>La fiche du participant à la braderie n'a pas été modifiée.</div>";
            }
       }
        $this->show('backoffice/garage/garageEdit', ['message'=>$message, 'garage' => $garages->find($id)]);
	}
    public function printgaragelist()
    {

        if(isset($_POST['garagePrint'])){
        var_dump('salut');
        $this->show('backoffice/garage/garageList', ['garages' => $garages->findAll()]);
        }
    }

}
?>
