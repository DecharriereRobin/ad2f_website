<?php

namespace Controller\Backoffice;

use Model\MeetingModel as Meeting;
use \W\Controller\Controller;

class MeetingController extends \W\Controller\Controller
{
    public function read()
	{   
        $meetings = new Meeting();
        $message = "";
        $this->show('backoffice/meetingList', ['meetings' => $meetings->findAll()]);
	}
    
    public function create()
	{
        $meetings = new Meeting();
        $message = "";
        if(isset($_POST['createMeeting'])){
        if(!empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['content'])){
            $meetings->insert([
            'date' => $_POST['date'],
            'address' => trim($_POST['address']),
            'content' => trim($_POST['content']),
            ],true);
            $message = "<div class='alert alert-success'>La réunion a bien été créée dans l'agenda.</div>";
            }else{
            $message = "<div class='alert alert-danger'>La réunion n'a pas été créée dans l'agenda.</div>";
            }
        }
        $this->show('backoffice/meetingCreate', ['message'=>$message]);
	}
    
    public function delete($id)
    {
            //$this->allowTo('admin'); // Only Admin User allowed for Back Office function and delete from agenda 
            $meetings = new Meeting();
            $meetings->delete($id);
            $this->redirectToRoute('backoffice_MeetingList');
    }
    public function edit($id)
    {
           //$this->allowTo('admin'); // Only Admin User allowed for Back Office function 
            $meetings = new Meeting();
            $message = "";
            if(isset($_POST['editMeeting'])){
            if(!empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['content'])){
                $meetings->update([
                    'date' => trim($_POST['date']),
                    'address' => trim($_POST['address']),
                    'content' => trim($_POST['content']),
                      ],$id, true);
            $message = "<div class='alert alert-success'>La réunion a bien été modifiée.</div>";
            }else{
            $message = "<div class='alert alert-danger'>La réunion n'a pas été modifiée.</div>";
            }
        }
        $this->show('backoffice/meetingEdit', ['message'=>$message, 'meeting' => $meetings->find($id)]);
	}
                
}