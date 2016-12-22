<?php
namespace Controller\Backoffice;
use \W\Model\UsersModel as Users;
use \W\Model\Model as Model;
use \Model\AdminModel as Admins;
use \W\Security\AuthentificationModel as Auth;
use \W\Security\StringUtils as String;

class AdminController extends \W\Controller\Controller
{
	/**
	 * Affichage de la liste des administrateurs
	 */
    public function showAdmin(){
		$this->allowTo('admin');
		$admins = new Admins();
		$this->show('backoffice/admin/adminView', ['admins' => $admins->findAll()]);
	}// fin public function showAdmin

	/**
	 * Enregistrement de nouveau administrateurs
	 */
	public function create()
	{
		$this->allowTo('admin');

		$message = "";
		$errorMessages = [];
        $errorClass = [];

		$admins = new Admins;
		$auth = new Auth();
		$user = new Users();
	    $auth->getLoggedUser();
		$string = new String();


        // Insertion de la table
		if(isset($_POST['createAdmin'])){
			$users=new Users();
			$errorMessages = [];

			// on verifie un par un que les champs sont remplit
			if (empty($_POST['firstname'])) {
				$errorMessages[] = 'Le nom est obligatoire. Merci de l\'indiquer.';
				$errorClass['firstname'] = 'has-error';
			}

			if (empty($_POST['lastname'])) {
				$errorMessages[] = 'Le prénom est obligatoire. Merci de l\'indiquer.';
				$errorClass['lastname'] = 'has-error';
			}

			if (empty($_POST['email'])) {
				$errorMessages[] = 'L\'email est obligatoire. Merci de l\'indiquer.';
				$errorClass['email'] = 'has-error';
			}

			if (empty($_POST['password'])) {
				$errorMessages[] = 'Le mot de passe est obligatoire. Merci de l\'indiquer.';
				$errorClass['password'] = 'has-error';
			}

			if ($_POST['password'] !== $_POST['cf-password']) {
				$errorMessages[] = 'Les deux mots de passe ne correspondent pas. Merci recommencer';
				$errorClass['cf-password'] = 'has-error';
			}
			// verifier que l'email n'existe pas dans la base de donnée
			$emailexist = $users->emailExists($_POST['email']);
			if($emailexist == true){
				$errorMessages[] = 'L\'utilisateur existe déjà';
				$errorClass['email'] = 'has-error';
			}

			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){

				$errorMessages[] = 'L\'email n\'est  pas valide';
				$errorClass['email'] = 'has-error';
			}

				// si le nombre message d'erreur est de Zero
			if(count($errorMessages) == 0)
			{

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
				$information =$user->getUserByUsernameOrEmail($_POST['email']);
				$token = $information['token'];
				$route = $this->generateUrl("backoffice_newpassword", ['token' => $token]);
				 // envoie d'un mail à la creation d'un nouveau admin
				 // Envoi du mail
	 			$mail = new \PHPMailer();
	 			$mail->setFrom('associationdes2faubourg@gmail.com', 'Association AD2F');
	 			$mail->addAddress($_POST['email']);
	 			$mail->Subject = "Ad2F-creation de votre compte admin";
	 			$mail->Body = "Bonjour" . $_SESSION['user']['firstname']. " " .$_SESSION['user']['lastname'] . 'Vous a inscrit en tant qu administateur du site de l associaton des 2 faubourg. Vous pouvez Cliqué sur ce lien pour recreer un nouveau mot de passe -  . http://localhost'. $route ;
	 			$mail->send();
				$message = "<div class='alert alert-success'>Le membre a bien été créé.</div>";

			}

				//$this->redirectToRoute('backoffice_AdminView');
        } // fin if isset
		$this->show('backoffice/admin/adminCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
	} // fin public function create


	// edit
	public function edit($id)
	{
		//$this->allowTo('admin');
		$admins = new Admins();
		$auth = new Auth();
		$message="";
		$errorMessages=[];
		$errorClass=[];


        //Editer la table
		if(isset($_POST['EditAdmin'])){
			$users=new Users();

			if (empty($_POST['firstname'])) {
				$errorMessages[] = 'Le nom est obligatoire. Merci de l\'indiquer.';
				$errorClass['firstname'] = 'has-error';
			}

			if (empty($_POST['lastname'])) {
				$errorMessages[] = 'Le prénom est obligatoire. Merci de l\'indiquer.';
				$errorClass['lastname'] = 'has-error';
			}

			if ($_POST['password'] !== $_POST['cf-password']) {
				$errorMessages[] = 'Les deux mots de passe ne correspondent pas. Merci recommencer';
				$errorClass['password'] = 'has-error';
			}

			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){

				$errorMessages[] = 'L\'email n\'est  pas valide';
				$errorClass['email'] = 'has-error';
			}

            if(count($errorMessages) == 0){
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
				}
			} // fin if isset admin
	//	afficher la vue
	$this->show('backoffice/admin/adminEdit', ['admin' => $admins->find($id), 'message'=>$message, 'errorMessages'=>$errorMessages, 'hasError' => $errorClass]);
	}
	/**
	 * Supprimer un administrateurs
	 */
	public function delete($id)
	{
		//$this->allowTo('admin');
        $admins = new Admins();
		if($id == $_SESSION['user']['id']){
			$message_error= "vous ne pouvez pas vous desincrire votre propre compte";
			$this->redirectToRoute('backoffice_AdminView');
		}else {
        $admins->delete($id);
		$this->redirectToRoute('backoffice_AdminView');
	}
    }
	//LOGIN
	public function login()
	{
		// login
		$message="";
		if(isset($_POST['LoginAdmin'])){
		$auth = new Auth();
		$userCheck = $auth->isValidLoginInfo($_POST['email'], $_POST['password']);
		if($userCheck){
			$admins = new Admins();
			$currentUser = $admins->find($userCheck);
			$auth->logUserIn($currentUser);
			$this->redirectToRoute('backoffice_Accueil');
		}else {
			# code..
		//afficher la page
		$message ="Votre email ou mot de passe est invalide";
	}
}
		$this->show('backoffice/admin/adminLogin',['message'=>$message]);
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
		//affiche page
		//$this->allowTo('admin');
		$this->show('backoffice/backofficeAccueil');
	}
		public function forgot()
		{
		$message = "";
		if(isset($_POST['adminForgot'])){ // Quand le formulaire est soumis
			// verification de l existance du mail
			$user = new Users();
			$emailexist = $user->emailExists($_POST['email']);
			if ($emailexist == true){
			// recupère le token
    		$information =$user->getUserByUsernameOrEmail($_POST['email']);
			$token = $information['token'];
			$route = $this->generateUrl("backoffice_newpassword", ['token' => $token]);
			//var_dump($user->emailExists($_POST['email']));
			//var_dump($information['token']);
			// Envoi du mail
			$mail = new \PHPMailer();
			$mail->setFrom('associationdes2faubourg@gmail.com', 'Association AD2F');
			$mail->addAddress($_POST['email']);
			$mail->Subject = "Ad2F nouveaux mot de passe";
			//$mail->Body = "Vous avez perdu votre mot de passe. Cliqué sur ce lien pour recreer un nouveau mot de passe - http://localhost/wf3/adf2/public/backoffice/admin/newPassword/" .$information['token'] ;
			$mail->Body = "Vous avez perdu votre mot de passe. Cliqué sur ce lien pour recreer un nouveau mot de passe - " . 'http://localhost'. $route ;
			$mail->send();
			$message = "Un email pour créer un nouveau mot de passe vous a été envoyé";
		}
		else {
			$message = "Ce mail n'existe pas";
		}
		}
		$this->show('backoffice/admin/adminForgot', ['message' => $message]);
	}
    // recupérer ID en fonction du token
	public function newpassword($token)
	{
		$admins = new Admins();
		$auth = new Auth();
		$admin = new Admins();
		$string = new String();
		$message="";
		//
		$validationToken = $admin->tokenExists($token);
		if($validationToken=='false'){
			if(isset($_POST['createNewPaswword'])){
				if((strlen($_POST['password']) >=5 )&& (!empty($_POST['password'])) && ($_POST['password']) == ($_POST['cf-password'])){
					// Ajout à la bdd
					$info =$admin->findID($token);
					$id=$info['id'];
					$admins->update([
						'password' =>$auth->hashPassword($_POST['password']),
						'token' => $string->randomString($length = 80)
					],$id,true);
					//redirection vers page de vue
					$message = "<div class='alert alert-success'>Le mot de passe a été changé.</div>";
					$this->redirectToRoute('backoffice_AdminLogin');
					}else{
						$message = "<div class='alert alert-danger'>Le mot de passe n'a pas été changé.</div>";
					}
				}
			$this->show('backoffice/admin/adminNewPassword', [ 'message'=>$message]);
		}else{
			$this->showNotFound();
		}
	}
} // fin class AdminController
