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
		$this->show('backoffice/eventCreate');
	}


	public function eventEdit($id)

	{
		$this->show('backoffice/eventEdit');
	}


	public function eventDelete($id)
	{
        //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
        $event = new Event();
        $event->delete($id);
        $uri = $this->generateUrl('backoffice_EventList');
		header("Location: $uri?message=1");
        die();
	}


}
