<?php

namespace Controller\Backoffice;

use Model\EventsModel as Event;
use Model\MediaModel as Media;

  /**
   * Methods to Create, Read, Update and Delete Events in the backoffice   
   * @package    Controller\Backoffice
   * @author     VINCENT GOSSEY <vincent.gossey@gmail.com>
   */
class EventController extends \W\Controller\Controller

{

    /**
     * Get one page
     * @Param int $page Used to get called page for pagination
     * @Return int $page Used to display current page for pagination
     * @Return int $maxPage Used to display last page for pagination
     * @Return array $event return associative array with all events in DB
     * @return to Views/Backoffice/eventList
     */

	public function eventList($page=1)
	{
        $this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();


        // Get all elements for Pagination
        $nbOfEvent = $event->allEvent();
        $nbOfEventByPage = 10;
        $maxPage = ceil($nbOfEvent / $nbOfEventByPage);
        $eventOffset = $nbOfEventByPage * ($page - 1);


        // Check if requested page is out of limits and redirect to previous or to the first page.
        if($page > $maxPage){
            $this->redirectToRoute('backoffice_EventList', ['page' => $page-1]);
        } elseif($page == 0){
            $this->redirectToRoute('backoffice_EventList');
        }

        // Return results to View
		$this->show('backoffice/event/eventList', ['events' => $event->findAll('id', 'ASC', $nbOfEventByPage, $eventOffset), 'page' => $page, 'maxPage' => $maxPage]);
	}

    
    /**
     * Get one page
     * @Param int $page Used to get called page for pagination
     * @Return mixed $message Display error or success message on view
     * @Return mixed $errorMessages Display errors on view
     * @return to Views/Backoffice/eventCreate
     */
    
	public function eventCreate()
	{
        // Only Admin User allowed for Back Office function
        $this->allowTo('admin'); 

        $event = new Event();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];
        $errorClass = [];
        
        
        
        if(isset($_POST['createEvent'])){

            $errorMessages = [];
            
            // Check if form is filled by user
            if(empty($_POST['title'])){
                $errorMessages[] = 'Le titre est obligatoire. Merci de l\'indiquer.';
                $errorClass['title'] = 'has-error';
            }

            if(empty($_POST['content'])){
                $errorMessages[] = 'Au moins une description doit être renseignée';
                $errorClass['content'] = 'has-error';
            }


            // Upload Image
            if($_FILES && $_FILES['file']['error'] == 0 ){

                // Check if upload folder exists or has been deleted

                if(!is_dir(__DIR__."/../../../public/upload")){

                    mkdir(__DIR__."/../../../public/upload");
                }


                // Define accepted MIME type
                $fileType = ["image/png", "image/gif", "image/jpg", "image/jpeg", "application/pdf"];
                
                // Check if uploaded image match MIME type
                if(in_array($_FILES['file']['type'], $fileType)){

                    $eventPicture = new Media();

                    $file = pathinfo($_FILES['file']['name']);
                    
                    // Set unique target name
                    $targetName = $file['filename']."-".date("d-m-Y")."-".uniqid().".".$file['extension'];
                    
                    // Set destination PATH
                    $currentFolder = "/public/upload/";
                    
                    // Get temporary uploaded image
                    $sourceFile = $_FILES['file']['tmp_name']; // Set upload Folder
                    

                } else{
                    $errorMessages[] = "Extension de fichier invalide";
                    $errorMessages[] = "Les types d'image acceptés sont: JPEG, JPG, GIF et PNG";
                    $errorMessages[] = "Pour plus d'informations, rendez-vous sur le site:";
                }

            }
            // If no error in previous process, images are processed for reduction and data is inserted to DB 
            if(count($errorMessages)== 0){
                // Process Image for compression with the same ratio to fit event specification
                Utils\Resize::resizeImageProportionally($sourceFile, $targetName, 800, 600);
                
                // To use if you prefer resize and crop the image
                //Utils\Resize::resizeImageToFit($sourceFile, $targetName, 1200, 310);
                
                // Insert Image Metadata in Media DB
                $getId = $eventPicture->insert([
                    'filename' => $targetName,
                    'filesize' => $_FILES['file']['size'],
                    'date'     => (new \DateTime('now'))->format('Y-m-d'),
                    'title'    => $file['filename'],
                    'path'     => $currentFolder.$targetName
                    ], true);
                
                // Get Last Insert ID
                $mediaId = $getId['id'];
                
                // Insert Image Metadata in Media DB
                $data = [
                    'title'    => trim($_POST['title']),
                    'content'  => trim($_POST['content']),
                    'date'     => trim($_POST['date']),
                    'category' => $_POST['category']
                ];
                if(isset($mediaId)){
                    $data['media_id'] = $mediaId;
                }
                $event->insert($data, true);

                $message = "<div class='alert alert-success'>L'évenement a bien été créé.</div>";


            } else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé.</div>";
            }
        }

        $this->show('backoffice//event/eventCreate', ['message'=>$message, 'errorMessages' => $errorMessages, 'hasError' => $errorClass]);

	}


    /**
    * Get one page
    * @Param int $id Get of the ID of the event to be edited
    * @Return mixed $message Display error or success message on view
    * @Return int $id return associative array with all events in DB
    * @return to Views/Backoffice/eventList
    */
	public function eventEdit($id)
    {
        // Only Admin User allowed for Back Office function
        $this->allowTo('admin'); 
        
        $event = new Event();
        $eventPicture = new Media();

        // Variables to diplay error
        $message = "";
        $errorMessages = [];

        // Check if form is filled by user
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
            
            
            // Upload Image
            if($_FILES && $_FILES['file']['error'] == 0 ){
                
                // Check if upload folder exists or has been deleted
            
                if(!is_dir(__DIR__."/../../../public/upload")){
                
                    mkdir(__DIR__."/../../../public/upload");
                }
                
            
                // Define accepted MIME type
                $fileType = ["image/png", "image/gif", "image/jpg", "image/jpeg", "application/pdf"];
                
                // Check if uploaded image match MIME type
                if(in_array($_FILES['file']['type'], $fileType)){

                    $eventPicture = new Media(); 
                    
                    // Set unique target name
                    $file = pathinfo($_FILES['file']['name']);
                    $targetName = $file['filename']."-".date("d-m-Y")."-".uniqid().".".$file['extension'];
                    
                    // Set destination PATH
                    $currentFolder = "/public/upload/";
                    
                    // Get temporary uploaded image
                    $sourceFile = $_FILES['file']['tmp_name']; 
                    

                } else{
                    $errorMessages[] = "Extension de fichier invalide";
                    $errorMessages[] = "Les types d'image acceptés sont: JPEG, JPG, GIF et PNG";
                    $errorMessages[] = "Pour plus d'informations, rendez-vous sur le site:";
                }

            }

            // If no error in previous process, images are processed for reduction and data is inserted to DB 
            if(count($errorMessages)== 0){
                // Process Image for compression with the same ratio to fit event specification
                Utils\Resize::resizeImageProportionally($sourceFile, $targetName, 800, 600);
                
                // To use if you prefer resize and crop the image
                //Utils\Resize::resizeImageToFit($sourceFile, $targetName, 1200, 310);
                
                 // Insert Image Metadata in DB
                $getId = $eventPicture->insert([
                'filename' => $targetName,
                'filesize' => $_FILES['file']['size'],
                'date'     => (new \DateTime('now'))->format('Y-m-d'),
                'title'    => $file['filename'],
                'path'     => $currentFolder.$targetName
                ], true);
                
                // Get Last Insert ID
                $mediaId = $getId['id'];
                
                // Insert event data in DB
                $data = [
                    'title'    => trim($_POST['title']),
                    'content'  => trim($_POST['content']),
                    'date'     => trim($_POST['date']),
                    'category' => $_POST['category']
                ];
                if(isset($mediaId)){
                    $data['media_id'] = $mediaId;
                }
                $event->update($data, $id, true);

                $message = "<div class='alert alert-success'>L'évenement a été modifié avec succés.</div>";
            } else {

                $message = "<div class='alert alert-danger'>L'évenement n'a pas été modifié.</div>";
            }
        }

        $this->show('backoffice//event/eventEdit', ['event' => $event->find($id), 'message'=>$message]);
    }

    /**
    * Get one page
    * @Param int $id Get of the ID of the event to be edited
    * @Param int $page Used to get called page for pagination
    * @Return int $page Used to display current page for pagination
    * @return to Views/Backoffice/eventList
    */
	public function eventDelete($id, $page = '')
	{  
        // Only Admin User allowed for Back Office function
        $this->allowTo('admin'); 
        $event = new Event();
        $event->delete($id);

        $_SESSION['message'] = "L'évenement a été supprimé avec succés ";

		$this->redirectToRoute('backoffice_EventList', ['page' => $page]);
	}


}
