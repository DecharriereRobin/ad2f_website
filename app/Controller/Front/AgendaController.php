<?php
namespace Controller\Front;

use \W\Controller\Controller;
use Model\EventsModel as Event;
use Model\MediaModel  as Media;
use Model\MeetingModel as Meeting;

class AgendaController extends Controller
{

    public function showSoon()
	{
        $events = new Event();
        $media = new Media();

		$this->show('front/agenda/agendaSoon', ['events' => $events->findAll(), 'media' => $media]);

	}

    public function showMeeting()
{
    $meetings = new Meeting();
    $this->show('front/agenda/agendaMeeting', ['meetings' => $meetings->findAll()]);
}

}
