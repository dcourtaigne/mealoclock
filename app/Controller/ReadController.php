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

  public function showEventsPage(){
    /*$eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEvents();
    $lastDate="";
    $results=[]
    for ($i = 0 ; $i<count($events); $i++ ){
      $dateStr = $events[$i]['event_date'];
      setlocale (LC_TIME, 'fr_FR.utf8','fra');
      $timestamp = strtotime($dateStr);
      $dateFR = strftime("%d %B %Y", $timestamp);
    //var_dump($dateFR);
      $events[$i]['dateFR'] = $dateFR;

      $results[$dateStr] = $events[$i]

    }*/
    $this->show('events');
  }

  public function showComPage($com){
    $community=[];
    switch ($com) {
      case 'vege':
        $community['name'] = "Végétariens";
        $community['css_id'] = "vegetarian";
        $community['css_class'] = "vertClair";
        $community['sql_id'] = "1";
        break;
        case 'vegan':
        $community['name'] = "Vegans";
        $community['css_id'] = "vegan";
        $community['css_class'] = "vertFonce";
        $community['sql_id'] = "2";
        break;
        case 'ssgluten':
        $community['name'] = "Sans Gluten";
        $community['css_id'] = "gluten";
        $community['css_class'] = "orange";
        $community['sql_id'] = "3";
        break;
        case 'sslactose':
        $community['name'] = "Sans Lactose";
        $community['css_id'] = "lactose";
        $community['css_class'] = "bleuLactose";
        $community['sql_id'] = "4";
        break;

      default:
        # code...
        break;
    }
    $this->show('community',['community'=>$community]);
  }

  public function getEventsAjax(){
    $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEvents();
    $eventsFR = Controller::getFrenchDate($events);
    $this->showJson($eventsFR);
  }

  public function getEventsAjaxCom(){
    if(isset($_GET['com'])){
      $com = intval($_GET['com']);
      $eventsObj = new EventsManager();
    $events = $eventsObj->getFutureEventsbyCom($com);

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
  }

  public function getCommunities(){
    $eventsObj = new CommunitiesManager();
    $communities = $eventsObj->findAll();
    var_dump($communities);
  }

}
