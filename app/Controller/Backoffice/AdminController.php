<?php

namespace Controller\Backoffice;
use \W\Controller\Controller;
use \W\Security\AuthentificationModel as Auth;
use Model\AdminModel as Admins;

class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */

    public function showAdmin(){
		$admins = new Admins();
		$this->show('backoffice/adminView', ['admins' => $admins->findAll()]);
	}

	public function create()
	{
		$admins = new Admins;
        // Insertion de la table
		if(isset($_POST['createAdmin'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])){
                // Ajout à la bdd
                $admins = new Admins();
                $admins->insert([
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
					'lastname' => "",
                    'email' => $_POST['email'],
                    'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'token' => 0,
					'role' => 'admin'
                ]);
        }
	}
		//Afficher la table
		$this->show('backoffice/adminCreate');
	}

	public function forgot()
	{
		$this->show('backoffice/adminForgot');
	}

	public function edit($id)
	{
		$admins = new Admins();
        //Editer la table
		if(isset($_POST['EditAdmin'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                // Ajout à la bdd
                $admins = new Admins();
                $admins->update([
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'token' => 0
                ]);
        }
	}
		//	afficher la vue
		$this->show('backoffice/adminEdit', ['admin' => $admins->find($id)]);
	}

	public function delete($id)
	{
        $admins = new Admins();
        $admins->delete($id);
		$this->show('backoffice/adminDelete');

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



} // fin class AdminController
