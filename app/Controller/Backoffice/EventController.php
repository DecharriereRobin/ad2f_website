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
     * @Param Page
     * @return View
     */

	public function eventList($page=1)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();

        // Get Pagination
        $nbOfEvent = $event->allEvent();
        $nbOfEventByPage = 10;
        $maxPage = ceil($nbOfEvent / $nbOfEventByPage);
        $eventOffset = $nbOfEventByPage * ($page - 1);

        // Check if called page is out of limits
        if($page > $maxPage || $page == 0){
            $page = 1 ;
        }

        // Return results to View
		$this->show('backoffice/eventList', ['events' => $event->findAll('id', 'ASC', $nbOfEventByPage, $eventOffset), 'page' => $page, 'maxPage' => $maxPage]);
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

            $errorMessages = [];

            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre est obligatoire. Merci de l\'indiquer.';
                $errorClass['title'] = 'has-error';
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


                $event->insert([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
                ], true);

                $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";

            } else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }

        $this->show('backoffice/eventCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);

	}


	public function eventEdit($id)

    {

        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];

        // Check if User filled form
        if(isset($_POST['editEvent'])){

            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre est obligatoire. Merci de l\'indiquer.';
            }

            if(empty($_POST['content'])){

                $errorMessages[] = 'La description de l\'évenement est vide';
            }


            if(empty($_POST['date'])){
                $errorMessages[] = 'La date est obligatoire. Merci de l\'indiquer.';
            }


            if(!count($errorMessages)){
                $event->update([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
                ], $id, true);

            $message = "<div class='alert alert-success'>L'évenement a bien été modifié.</div>";
            }else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }

        $this->show('eventEdit', ['event' => $event->find($id), 'message'=>$message]);

    }


	public function eventDelete($id, $page = '')
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
        $event->delete($id);

        $_SESSION['message'] = "L'évenement a été supprimé avec succés ";

		$this->redirectToRoute('backoffice_EventList', ['page' => $page]);
	}


}
