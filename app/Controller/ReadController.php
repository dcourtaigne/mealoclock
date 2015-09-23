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
    for ($i = 0 ; $i<count($events); $i++ ){
      $dateStr = $events[$i]['event_date'];
      setlocale (LC_TIME, 'fr_FR.utf8','fra');
      $timestamp = strtotime($dateStr);
      $dateFR = strftime("%d %B %Y", $timestamp);
    //var_dump($dateFR);
      $events[$i]['dateFR'] = $dateFR;
    }

    $this->showJson($events);
  }

  public function getCommunities(){
    $eventsObj = new CommunitiesManager();
    $communities = $eventsObj->findAll();
    var_dump($communities);


  }
}
