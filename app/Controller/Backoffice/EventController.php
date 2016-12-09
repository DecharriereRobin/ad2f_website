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
		$this->show('backoffice/eventList', ['events' => $event->findAll()]);
	}

	public function eventCreate()
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $message = "";
        $event = new Event();
        if(isset($_POST['createEvent'])){
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date']) && !empty($_POST['category'])){
                
                $event->insert([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category'][0]
                ], $id, true);
                
            $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";
            }else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }
        
        $this->show('backoffice/eventCreate', ['message'=>$message]);
		
	}


	public function eventEdit($id)
    {
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $message = "";
        $event = new Event();
        if (isset($_POST['editEvent'])) {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])) {

                $event->update([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category'][0]
                ], $id, true);

                $message = "<div class='alert alert-success'>L'évenement a bien été modifié.</div>";
            } else {
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }
<<<<<<< HEAD

        $this->show('backoffice/eventEdit', ['event' => $event->find($id), 'message' => $message]);
=======
        
        $this->show('backoffice/eventEdit', ['event' => $event->find($id), 'message'=>$message]);
>>>>>>> 41cff60da01e80d15b79a247f6f4cb97ea1f5522
    }


	public function eventDelete($id)
	{
        $this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
        $event->delete($id);
        $_SESSION['message'] = "Test";
		$this->redirectToRoute('backoffice_EventList');
	}


}
