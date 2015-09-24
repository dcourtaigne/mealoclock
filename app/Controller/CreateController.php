<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\UsersManager;
use Manager\EventsManager;
use Manager\CommunitiesManager;


class CreateController extends Controller{

  public function editEvent($params,$id=NULL){
    //récupération du nom des communautés pour les afficher dans les options du formulaire
    $comObj = new CommunitiesManager();
    $communities = $comObj->findAll();
    $user = $this->getUser();

      if($params == 'create'){
        // cas de la création d'un nouvel event
        $idEvent = "";
        $eventObj = new EventsManager();
        $event = $eventObj-> findEventFieldName();
        $event['event_date'] = date('Y-m-d');

        $title = "Créer un événement";
        $submitName = 'Créer l\'événement';
        $formAction = $this->generateUrl('editEvent', ['action' => 'create']);




      }elseif($params == 'edit'){
        // cas de la modification d'un event existant

      }


    $message = "";
    $errors = [
      'name'=>"",
      'community'=>"",
      'desc'=>"",
      'location'=>"",
      'date'=>"",
      'time'=>"",
      'guests'=>""];
    $values = $event;

    if(!empty($_POST)) {
      if(empty($_POST['event_title'])) $errors['name']="Ce champ ne peut être vide";
      if($_POST['community_id'] == 0) $errors['community']="Vous devez choisir une communauté";
      if(empty($_POST['event_desc'])) $errors['desc']="Ce champ ne peut être vide";
      if($_POST['event_location'] == 0) $errors['location']="Vous devez choisir un lieu";
      if($_POST['event_date'] == 0) $errors['date']="Vous devez choisir une date";
      if($_POST['event_time']== 0) $errors['time']="Vous devez choisir une heure";
      if(empty($_POST['event_guests'])) $errors['guests']="Ce champ ne peut être vide";

      $filters = EventsManager::getValidationFilters();
      $values = filter_input_array(INPUT_POST, $filters);
      $values['user_id'] = $user['user_id'];

      $validform = empty($errors['name']) && empty($errors['community']) && empty($errors['desc']) && empty($errors['location'])
                    && empty($errors['date']) && empty($errors['time']) && empty($errors['guests']);
      var_dump($validform);
      if($validform){
        $eventObj = new EventsManager();
        if(!empty($idEvent)){
          if($eventObj->update($values,$idEvent)) $message = "Modifications enregistrées";
        }else{
          if($eventObj->insert($values)) $message = "L'événement a bien été créé";
        }
      }
    }


    $this->show('editEvent',[
      'message'=>$message,
      'communities'=>$communities,
      'event'=>$event,
      'idEvent'=>$idEvent,
      'title'=>$title,
      'submitName'=>$submitName,
      'formAction'=>$formAction
      ]);
  }

  public function contact(){

    $this->show('contact');
  }




}
