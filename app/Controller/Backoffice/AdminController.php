<?php

namespace Controller\Backoffice;
use \W\Controller\Controller;
use \W\Security\AuthentificationModel as Auth;
use \W\Security\StringUtils as String;
use Model\AdminModel as Admins;

class AdminController extends Controller
{
	/**
	 * Affichage de la liste des administrateurs
	 */
    public function showAdmin(){
		$this->allowTo('admin');
		$admins = new Admins();
		$this->show('backoffice/adminView', ['admins' => $admins->findAll()]);
	}// fin public function showAdmin

	/**
	 * Enregistrement de nouveau administrateurs
	 */

	public function create()
	{
		//$this->allowTo('admin');
		$message = "";
		$admins = new Admins;
		$auth = new Auth();
		$string = new String();
        // Insertion de la table
		if(isset($_POST['createAdmin'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])){
                // Ajout à la bdd
                $admins->insert([
                    'firstname' => trim($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
					'username' => "",
                    'email' =>  trim($_POST['email']),
                    'password' => $auth->hashPassword($_POST['password']),
                    'token'    => $string->randomString($length = 80),
					'role' => 'admin'
                ],true);

				$message = "<div class='alert alert-success'>Le nouveau membre du CA a bien été crée.</div>";
	            }else{
	                $message = "<div class='alert alert-danger'>Le nouveau membre du CA n'a pas été créé.</div>";
	            }
				//$this->redirectToRoute('backoffice_AdminView');
        }
		$this->show('backoffice/adminCreate', ['message'=>$message]);
	} // fin public function create

	/**
	 * Editer un administrateurs
	 */

	public function edit($id)
	{
		$this->allowTo('admin');
		$admins = new Admins();
		$auth = new Auth();
		$message="";
        //Editer la table
		if(isset($_POST['EditAdmin'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
                // Ajout à la bdd
                $admins->update([
                    'firstname' => trim($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
                    'email' => trim($_POST['email']),
                    'password' =>$auth->hashPassword($_POST['password'])
                ],$id,true);
				//redirection vers page de vue
				//$this->redirectToRoute('backoffice_AdminView');
				$message = "<div class='alert alert-success'>L'administrateurs a bien été modifié.</div>";
				}else{
					$message = "<div class='alert alert-danger'>L'administrateurs n'a pas été modifié.</div>";
				}
			}
	//	afficher la vue
	$this->show('backoffice/adminEdit', ['admin' => $admins->find($id), 'message'=>$message]);

	}

	/**
	 * Supprimer un administrateurs
	 */

	public function delete($id)
	{
		$this->allowTo('admin');
        $admins = new Admins();
        $admins->delete($id);
		$this->redirectToRoute('backoffice_AdminView');

    }// fin function delete


	//LOGIN

	public function login()
	{
		// login
		if(isset($_POST['LoginAdmin'])){
		$auth = new Auth();
		$userCheck = $auth->isValidLoginInfo($_POST['email'], $_POST['password']);
		if($userCheck){
			$admins = new Admins();
			$currentUser = $admins->find($userCheck);
			$auth->logUserIn($currentUser);
			$this->redirectToRoute('backoffice_Accueil');
		}
	}
		//afficher la page
		$this->show('backoffice/adminLogin');
	}// FIN Function login

	// DECONNECTION
	public function logout()
	{
		$auth = new Auth();
        $auth->logUserOut();
        $this->redirectToRoute('backoffice_AdminLogin');
	} // FIN Function logout

	public function home()
	{
        $auth = new Auth();
		$auth->getLoggedUser();
		//print_r($_SESSION);
		echo "bonjour ";
		echo $_SESSION['user']['firstname'];
		echo $_SESSION['user']['lastname'];
		//affiche page
		$this->show('backoffice/backofficeAccueil');
	}


		public function forgot()
		{






		$message = "";
		if(isset($_POST['adminForgot'])){ // Quand le formulaire est soumis
			//var_dump($_POST);
			// Envoi du mail
			$mail = new \PHPMailer();
			$mail->setFrom('vincentjenni@gmail.com', 'Association AD2F');
			$mail->addAddress($_POST['email']);
			$mail->Subject = "Ad2F nouveaux mot de passe";
			$mail->Body = "Vous avez perdu votre mot de passe. Cliqué sur ce lien pour recreer un nouveau mot de passe";
			$mail->send();
			$message = "Un email pour créer un nouveau mot de passe vous a été envoyé";
		}
		$this->show('backoffice/adminForgot', ['message' => $message]);
	}

} // fin class AdminController
