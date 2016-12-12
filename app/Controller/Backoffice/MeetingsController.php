<?php

namespace Controller\Backoffice;

use \W\Controller\Controller;
use Model\MeetingsModel as Meetings;


class MeetingsController extends Controller
{

	public function liste()
	{
         //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $meetings = new Meetings();
		$this->show('backoffice/meetingsList', ['meetings' => $meetings->findAll()]);
	}
        
	

    public function create()
	{
        $message = "";
        $meetings = new Meetings();
       
        if(isset($_POST['createMeetings'])){
            if(!empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['content'])){
                $meetings->insert([
                    'date' => $_POST['date'],
                    'address' => trim($_POST['address']),
                    'content' => trim($_POST['content']),
                ],true);
                
            $message = "<div class='alert alert-success'>L'évenement a bien été créé dans l'agenda.</div>";
            }else{
                $message = "<div class='alert alert-danger'>L'évenement n'a pas été créé dans l'agenda.</div>";
            }
        }
        $this->show('backoffice/meetingsCreate', ['message'=>$message]);
		
	}

    public function delete($id)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function and delete from agenda
        $meetings = new Meetings();
        $meetings->delete($id);  
        $this->show('backoffice/meetingsList', ['meetings' => $meetings->findAll()]);
        
	}
    
	}
    

