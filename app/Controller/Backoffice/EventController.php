<?php

namespace Controller\Backoffice;

use Model\EventsModel as Event;
use Model\MediaModel as Media;

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
     * @Param Int $page Used for pagination purpose
     * @return View
     */

	public function eventList($page=1)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();


        // Get all elements for Pagination
        $nbOfEvent = $event->allEvent();
        $nbOfEventByPage = 10;
        $maxPage = ceil($nbOfEvent / $nbOfEventByPage);
        $eventOffset = $nbOfEventByPage * ($page - 1);


        // Check if requested page is out of limits and redirect to the first page if so.
        if($page > $maxPage || $page == 0 ){
            $this->redirectToRoute('backoffice_EventList');
        }

        // Return results to View
		$this->show('backoffice/event/eventList', ['events' => $event->findAll('id', 'ASC', $nbOfEventByPage, $eventOffset), 'page' => $page, 'maxPage' => $maxPage]);
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
                $errorClass['content'] = 'has-error';
            }


            if($_FILES && $_FILES['file']['error'] == 0 ){

                // Check if upload folder exists or has been deleted

                if(!is_dir(__DIR__."/../../../public/upload")){

                    mkdir(__DIR__."/../../../public/upload");
                }


                // Define accepted MIME type
                $fileType = ["image/png", "image/gif", "image/jpg", "image/jpeg", "application/pdf"];

                if(in_array($_FILES['file']['type'], $fileType)){

                    $eventPicture = new Media();

                    $file = pathinfo($_FILES['file']['name']);
                    $targetName = $file['filename']."-".date("d-m-Y")."-".uniqid().".".$file['extension'];

                    $sourceFile = $_FILES['file']['tmp_name']; // Get temporary uploaded image
                    Utils\Resize::resizeimage($sourceFile, $targetName, 800, 600);


                    // Insert Image Metadata in DB
                    $getId = $eventPicture->insert([
                    'filename' => $targetName,
                    'filesize' => $_FILES['file']['size'],
                    'date'     => (new \DateTime('now'))->format('Y-m-d'),
                    'title'    => $file['filename'],
                    'path'     => __UPLOAD__.$targetName
                    ], true);

                    $mediaId = $getId['id'];

                } else{
                    $errorMessages[] = "Extension de fichier invalide";
                    $errorMessages[] = "Les types d'image acceptés sont: JPEG, JPG, GIF et PNG";
                    $errorMessages[] = "Pour plus d'informations, rendez-vous sur le site:";
                }

            } else{
                $mediaId = NULL;
            }

            // Insert all data in DB

            if(count($errorMessages)== 0){
                $event->insert([
                    'title'   => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'media_id' => $mediaId,
                    'date'    => trim($_POST['date']),
                    'category' => $_POST['category']
                ], true);

                $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";


            } else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }

        $this->show('backoffice//event/eventCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);

	}




	public function eventEdit($id)
    {

        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
        $eventPicture = new Media();

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


            if(count($errorMessages)== 0){

                $event->update([
                    'title' => trim($_POST['title']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    'category' => $_POST['category']
                ], $id, true);

                $message = "<div class='alert alert-success'>L'évenement a bien été modifié.</div>";
            } else {

                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }

        $this->show('backoffice//event/eventEdit', ['event' => $event->find($id), 'message'=>$message]);
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
