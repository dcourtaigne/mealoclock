<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\UsersManager;
use Manager\EventsManager;
use Manager\CommunitiesManager;


class CreateController extends Controller{

  public function createEvent(){
    $comObj = new CommunitiesManager();
    $communities = $comObj->findAll();

    $this->show('createEvent',['communities'=>$communities]);
  }

  


}
