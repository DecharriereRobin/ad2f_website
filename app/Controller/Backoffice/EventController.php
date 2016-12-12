<?php

namespace Controller\Backoffice;

use Model\EventsModel as Event;

  /**
   * List of event
   *
   *
   * @package    W
   * @subpackage Controller
   * @author     VINCENT GOSSEY <vincent.gossey@gmail.com>
   */
class EventController extends \W\Controller\Controller

{

    /**
     * Get one page
     * @return View
     */

	public function eventList()
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
		$this->show('eventList', ['events' => $event->findAll()]);
	}

	public function eventCreate()
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function

        $event = new Event();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];
        $errorClass = [];
<<<<<<< HEAD

        if(isset($_POST['createEvent'])){
=======
        
        if(isset($_POST['createEvent'])){

>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
            $errorMessages = [];

            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre est obligatoire. Merci de l\'indiquer.';
                $errorClass['title'] = 'has-error';
            }

            if(empty($_POST['content'])){
                $errorMessages[] = 'Au moins une description doit être renseignée';
<<<<<<< HEAD
                $errorClass[] = 'has-error';
            }

            if(empty($_POST['date'])){
                $errorMessages[] = 'Le date doit être indiquée';
                $errorClass[] = 'has-error';
            }

            if(count($errorMessages)== 0){

=======
                $errorClass['content'] = 'has-error';
            } 
            
            if(count($errorMessages)== 0){
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
                $event->insert([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
                ], true);
<<<<<<< HEAD

=======
<<<<<<< HEAD
                
=======

>>>>>>> 82d405da8ba3405ef84039ba94e62a88f8458486
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
                $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";

            } else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }

        $this->show('backoffice/eventCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
<<<<<<< HEAD
=======
	}
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a

	}

	public function eventEdit($id)
<<<<<<< HEAD

=======
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
    {

        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];

        // Check if User filled form
        if(isset($_POST['editEvent'])){
<<<<<<< HEAD

=======
            
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre est obligatoire. Merci de l\'indiquer.';
            }

            if(empty($_POST['content'])){
<<<<<<< HEAD
                $errorMessages[] = 'Au moins une doit être renseignée';
            }

=======
                $errorMessages[] = 'La description de l\'évenement est vide';
            } 
            
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a
            if(empty($_POST['date'])){
                $errorMessages[] = 'La date est obligatoire. Merci de l\'indiquer.';
            }
<<<<<<< HEAD
=======
            
            if(!count($errorMessages)){
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a

            if(!count($errorMessages)){
                $event->update([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
                ], $id, true);

<<<<<<< HEAD
            $message = "<div class='alert alert-success'>L'évenement a bien été modifié.</div>";
            }else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }

        $this->show('eventEdit', ['event' => $event->find($id), 'message'=>$message]);
=======
                $message = "<div class='alert alert-success'>L'évenement a bien été modifié.</div>";
            } else {

                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }
>>>>>>> d2b297dfcdab3fbc47e8023da2e42657f49abd9a

    }


	public function eventDelete($id)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
        $event->delete($id);

        $_SESSION['message'] = "L'évenement a été supprimé avec succés ";

		$this->redirectToRoute('backoffice_EventList');
	}


}
