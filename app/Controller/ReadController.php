<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\EventsManager;

class ReadController extends Controller{

  public function home(){

    $this->show('home');

  }

  public function about(){

    $this->show('about');

  }

  public function getEvents(){
    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEvents();
    $this->show('events',['events'=>$events]);
  }

  public function getEventsbyCom($com){
    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEventsbyCom($com);
    $this->show('events',['events'=>$events]);
  }

  public function getEventsAjax(){
    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEvents();
    $this->showJson($events);
  }
}
