<?php
/**
* Controller Events
*/
class Events extends Controller
{
	protected $events;
	function __construct()
	{
		$this->events = $this->model('Event');
	}

	public function index()
	{
		$events = $this->events->get();
		$this->view('events/index',compact('events'));
	}
}