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
            //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
             $garages = new Garage();
            // Variables to diplay error
            $message = "";
            $errorMessages = [];
            $errorClass = [];
            if(isset($_POST['createGarage']))
			{
				
				if (empty($_POST['firstname'])) {
					$errorMessages[] = 'Le nom est obligatoire. Merci de l\'indiquer.';
					$errorClass['firstname'] = 'has-error';
				}
				if (empty($_POST['lastname'])) {
					$errorMessages[] = 'Le prénom est obligatoire. Merci de l\'indiquer.';
					$errorClass['lastname'] = 'has-error';
				}
				if (empty($_POST['address'])) {
					$errorMessages[] = 'L\'adresse est obligatoire. Merci de l\'indiquer.';
					$errorClass['address'] = 'has-error';
				}
				if (empty($_POST['email'])) {
					$errorMessages[] = 'L\' email est obligatoire. Merci de l\'indiquer.';
					$errorClass['email'] = 'has-error';
				}
                if (empty($_POST['phone'])) {
					$errorMessages[] = 'Le téléphone est obligatoire. Merci de l\'indiquer.';
					$errorClass['phone'] = 'has-error';
				}
                if (empty($_POST['reservedmeters'])) {
					$errorMessages[] = 'Le nombre de mètres résérvés est obligatoire. Merci de l\'indiquer.';
					$errorClass['reservedmeters'] = 'has-error';
				}
                if (empty($_POST['adhesion'])) {
					$errorMessages[] = 'L\' adhesion est obligatoire. Merci de l\'indiquer.';
					$errorClass['adhesion'] = 'has-error';
				}
                if (empty($_POST['period'])) {
					$errorMessages[] = 'La période est obligatoire. Merci de l\'indiquer.';
					$errorClass['period'] = 'has-error';
				}
                if (empty($_POST['amount'])) {
					$errorMessages[] = 'Le montant est obligatoire. Merci de l\'indiquer.';
					$errorClass['amount'] = 'has-error';
				}
                 if (empty($_POST['total_amount_paid'])) {
					$errorMessages[] = 'Le montant est obligatoire. Merci de l\'indiquer.';
					$errorClass['total_amount_paid'] = 'has-error';
				}
				if(count($errorMessages)== 0)
                {
							$garages->insert([
								'firstname' => trim($_POST['firstname']),
                                'lastname' => trim($_POST['lastname']),
                                'address' => trim($_POST['address']),
                                'email' => trim($_POST['email']),
                                'phone' => trim($_POST['phone']),
                                'reservedmeters' => trim($_POST['reservedmeters']),
                                'adhesion' => trim($_POST['adhesion']),
                                'period' => trim($_POST['period']),
                                'amount' => trim($_POST['amount']),
                                'total_amount_paid' => trim($_POST['total_amount_paid']),
							], true);
							$message = "<div class='alert alert-success'>Le participant a bien été créé.</div>";			
				}else{
					$message = "<div class='alert alert-danger'>Le participant n'a pas été créé. Veuillez remplir tous les champs.</div>";
				}
			}
			$this->show('backoffice/garage/GarageCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
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
                if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['reservedmeters']) && !empty($_POST['adhesion']) && !empty($_POST['period']) && !empty($_POST['amount']) && !empty($_POST['total_amount_paid'])){
                    $garages->update([
                        'firstname' => trim($_POST['firstname']),
                        'lastname' => trim($_POST['lastname']),
                        'address' => trim($_POST['address']),
                        'email' => trim($_POST['email']),
                        'phone' => trim($_POST['phone']),
                        'reservedmeters' => trim($_POST['reservedmeters']),
                        'adhesion' => trim($_POST['adhesion']),
                        'period' => trim($_POST['period']),
                        'amount' => trim($_POST['amount']),
                        'total_amount_paid' => trim($_POST['total_amount_paid']),
                
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
        //var_dump('salut');
        $this->show('backoffice/garage/garageList', ['garages' => $garages->findAll()]);
        }
    }

}
?>