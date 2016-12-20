<?php
namespace Controller\Front;

use \W\Controller\Controller;
use Model\EventsModel as Event;
use Model\MediaModel  as Media;

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
    $this->show('front/agenda/agendaMeeting');
}


}
