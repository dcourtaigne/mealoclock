<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\EventsManager;
use Manager\CommunitiesManager;

class ReadController extends Controller{

  public function home(){

    $this->show('home');
  }

  public function about(){

    $this->show('about');

  }

  public function showEventsPage(){
    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEvents();
    $events = Controller::getFrenchDate($events);
    $results=[];

    for ($i = 0 ; $i<count($events); $i++ ){
      $events[$i]['event_time'] = formatTime($events[$i]['event_time'] );
      if($i == 0 || $events[$i]['event_date'] !== $events[$i-1]['event_date']){
      $results[$events[$i]['event_date']][0]= $events[$i];
      }else{
      $results[$events[$i-1]['event_date']][$i]= $events[$i];
      }
    }
    $this->show('events',['events'=>$results]);
  }

  public function showComPage($com){
    $community=[];
    $comObj = new CommunitiesManager();
    $communities = $comObj->findAll();

    foreach ($communities as $singleCom) {
      if($com == $singleCom['com_shortname']){
        $community = $singleCom;
      }
    }

    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEventsbyCom(intval($community['id']));
    $events = Controller::getFrenchDate($events);
    //var_dump($events); echo '<br>';
    $lastDate="";
    $results=[];

    for ($i = 0 ; $i<count($events); $i++ ){
      $events[$i]['event_time'] = formatTime($events[$i]['event_time'] );
      if($i == 0 || $events[$i]['event_date'] !== $events[$i-1]['event_date']){
      $results[$events[$i]['event_date']][0]= $events[$i];
      }else{
      $results[$events[$i-1]['event_date']][$i]= $events[$i];
      }
    }
    $this->show('community',['community'=>$community, 'events'=>$results]);
  }

  public function getEventsAjax(){
    $eventsObj = new EventsManager();
    $eventDates = $eventsObj->getFutureEventDates();
    //var_dump($eventDates);
    $this->showJson($eventDates);
  }

  public function getEventsAjaxCom(){
    if(isset($_GET['com'])){
      $com = intval($_GET['com']);
      $eventsObj = new EventsManager();
      $events = $eventsObj->getFutureEventDatesbyCom($com);
      $this->showJson($events);
    }
  }
/*
  public function getCommunities(){
    $eventsObj = new CommunitiesManager();
    $communities = $eventsObj->findAll();
    var_dump($communities);
  }
*/
  public function showEvent($id){
    $eventObj = new EventsManager();
    $thisId = (int)$id;
    $event = $eventObj->getEventInfo($thisId);
    //$event = Controller::getFrenchDate($event);
    $event['guests'] = $eventObj->getEventGuests($thisId);
    $tempGuests = $eventObj->getAllEventGuests($thisId);
    $event['guestsId']=[];
    foreach ($tempGuests as $tempGuest) {
      $event['guestsId'][]=$tempGuest['id'];
    }
    $event[0]['event_time'] = formatTime($event[0]['event_time'] );
    $event[0]['event_date'] = formatDateFR($event[0]['event_date'] );
    $this->show('event',['event'=>$event]);
  }
}
