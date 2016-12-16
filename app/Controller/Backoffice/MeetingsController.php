php

namespace Controller\Backoffice;

use Model\MeetingsModel as Meetings;
use \W\Controller\Controller;

class MeetingsController extends \W\Controller\Controller
{
    public function liste()
	{   
        $meetings = new Meetings();
        $message = "";
        $this->show('backoffice/meetingsList', ['meetings' => $meetings->findAll()]);
	}
    
    public function create()
	{
        $meetings = new Meetings();
        $message = "";
        if(isset($_POST['createMeetings'])){
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
        $this->show('backoffice/meetingsCreate', ['message'=>$message]);
	}
    
    public function delete($id)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function and delete from agenda 
            $meetings = new Meetings();
            $meetings->delete($id);
            $this->redirectToRoute('backoffice_MeetingsList');
    }
    public function edit($id)
    {
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function 
        $meetings = new Meetings();
        $message = "";
            if(isset($_POST['editMeetings'])){
            if(!empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['content'])){
                $meetings->update([
                    'date' => trim($_POST['date']),
                    'address' => trim($_POST['address']),
                    'content' => trim($_POST['content']),
                    ],$id, true);
                
            $this->redirectToRoute('backoffice_MeetingsList');
             } 
        }
        $this->show('backoffice/meetingsEdit', ['meeting' => $meetings->find($id)]);
    }
}