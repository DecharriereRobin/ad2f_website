<?php
namespace Controller\Backoffice;
use \W\Model\UsersModel as Users;
use \W\Model\Model as Model;
use \W\Security\AuthentificationModel as Auth;
use \W\Security\StringUtils as String;
use \Model\AdminModel as Admins;
use  Model\AdminModel as Admin;
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
		//$this->allowTo('admin');
		$message = "";
		$admins = new Admins;
		$auth = new Auth();
		$string = new String();
        // Insertion de la table
		if(isset($_POST['createAdmin'])){
			$users=new Users();
			$emailexist = $users->emailExists($_POST['email']);
			if($emailexist == true){
				$message = "<div class='alert alert-danger'>L utilisateur existe déjà.</div>";
            }elseif(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])){
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
		$this->show('backoffice/admin/adminCreate', ['message'=>$message]);
	} // fin public function create
    // edit
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
	$this->show('backoffice/admin/adminEdit', ['admin' => $admins->find($id), 'message'=>$message]);
	}
	/**
	 * Supprimer un administrateurs
	 */
	public function delete($id)
	{
		$message_error="";
		$this->allowTo('admin');
        $admins = new Admins();
		if($id == $_SESSION['user']['id']){
			$message_error= "vous ne pouvez pas vous desincrire vous même";
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
		if(isset($_POST['LoginAdmin'])){
		$auth = new Auth();
		$message="";
		$userCheck = $auth->isValidLoginInfo($_POST['email'], $_POST['password']);
		if($userCheck){
			$admins = new Admins();
			$currentUser = $admins->find($userCheck);
			$auth->logUserIn($currentUser);
			$this->redirectToRoute('backoffice_Accueil');
		}
	}
		//afficher la page
		$message ="Votre email ou mot de passe est invalide";
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
		
		$this->allowTo('admin');
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
			//var_dump($user->emailExists($_POST['email']));
			// recupère le token
    		$information =$user->getUserByUsernameOrEmail($_POST['email']);
			//var_dump($information['token']);
			// Envoi du mail
			$mail = new \PHPMailer();
			$mail->setFrom('associationdes2faubourg@gmail.com', 'Association AD2F');
			$mail->addAddress($_POST['email']);
			$mail->Subject = "Ad2F nouveaux mot de passe";
			$mail->Body = "Vous avez perdu votre mot de passe. Cliqué sur ce lien pour recreer un nouveau mot de passe - http://localhost/wf3/ad2f/public/backoffice/admin/newPassword/" .$information['token'] ;
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
		$admin = new Admin();
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