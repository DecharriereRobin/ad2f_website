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
        
        if(isset($_POST['createEvent'])){
<<<<<<< HEAD
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date']) && !empty($_POST['category'])){

=======
            $errorMessages = [];
            
            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre doit être complété';
                $errorClass[] = 'has-error';
            }
            
            if(empty($_POST['content'])){
                $errorMessages[] = 'Au moins une description doit être renseignée';
                $errorClass[] = 'has-error';
            } 
            
            if(empty($_POST['date'])){
                $errorMessages[] = 'Le date doit être indiquée';
                $errorClass[] = 'has-error';
            }
            
            if(count($errorMessages)== 0){
>>>>>>> badd70c6b53be96d4262efcf7d44aee1e188e61f
                $event->insert([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
<<<<<<< HEAD
                ], $id, true);

            $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";
            }else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }

        $this->show('eventCreate', ['message'=>$message]);

=======
                ], true);
                
                $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";
                
            } else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }
        
        $this->show('backoffice/eventCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);
		
>>>>>>> badd70c6b53be96d4262efcf7d44aee1e188e61f
	}


	public function eventEdit($id)
<<<<<<< HEAD
	{
=======
    {
>>>>>>> badd70c6b53be96d4262efcf7d44aee1e188e61f
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];
       
        // Check if User filled form
        if(isset($_POST['editEvent'])){
<<<<<<< HEAD
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])){
=======
            
            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre doit être complété';
            }
            
            if(empty($_POST['content'])){
                $errorMessages[] = 'Au moins une doit être renseignée';
            } 
            
            if(empty($_POST['date'])){
                $errorMessages[] = 'Le titre doit être indiquée';
            }
            
            if(!count($errorMessages)){
>>>>>>> badd70c6b53be96d4262efcf7d44aee1e188e61f

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
>>>>>>> badd70c6b53be96d4262efcf7d44aee1e188e61f

        $this->show('backoffice/eventEdit', ['event' => $event->find($id), 'message'=>$message]);
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
