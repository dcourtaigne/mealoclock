<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\UsersManager;
use Manager\EventsManager;
use Manager\CommunitiesManager;


class CreateController extends Controller{

  public function editEvent($action,$id=NULL){
    //récupération du nom des communautés pour les afficher dans les options du formulaire
    $comObj = new CommunitiesManager();
    $communities = $comObj->findAll();
    $user = $this->getUser();
    $currentDate = date('Y-m-d');

      if($action == 'create'){
        // cas de la création d'un nouvel event
        $idEvent = "";
        $eventObj = new EventsManager();
        $event = $eventObj-> findEventFieldName();


        $title = "Créer un événement";
        $submitName = 'Créer l\'événement';
        $formAction = $this->generateUrl('editEvent', ['action' => 'create']);

      }elseif($action == 'edit'){
        // cas de la modification d'un event existant
        $idEvent = (int)$id;
        $eventObj = new EventsManager();
        $event = $eventObj->find($idEvent);
        $event['event_time'] = substr($event['event_time'], 0, 5);
        $title = "Modifier l'événement ".$event['event_title'];
        $submitName = 'Modifier';
        $formAction = $this->generateUrl('editEvent', ['action' =>  'edit', 'id' => $idEvent]);
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
    //$values = $event;

    if(!empty($_POST)) {
      if(empty($_POST['event_title'])) $errors['name']="Ce champ ne peut être vide";
      if($_POST['community_id'] == 0) $errors['community']="Vous devez choisir une communauté";
      if(empty($_POST['event_desc'])) $errors['desc']="Ce champ ne peut être vide";
      if($_POST['event_location'] == 0) $errors['location']="Vous devez choisir un lieu";
      if($_POST['event_date'] == 0) $errors['date']="Vous devez choisir une date";
      //if($_POST['event_time']== 0) $errors['time']="Vous devez choisir une heure";
      if(empty($_POST['event_guests'])) $errors['guests']="Ce champ ne peut être vide";

      $filters = EventsManager::getValidationFilters();
      $values = filter_input_array(INPUT_POST, $filters);
      $values['user_id'] = $user['id'];
      //var_dump($user);
      $validform = empty($errors['name']) && empty($errors['community']) && empty($errors['desc']) && empty($errors['location'])
                    && empty($errors['date']) && empty($errors['time']) && empty($errors['guests']);
      if($validform){
        $eventObj = new EventsManager();
        if(!empty($idEvent)){
          if($eventObj->update($values,$idEvent)) header("location:".$this->generateUrl('event', ['id'=>$idEvent]));
        }else{
          if($eventObj->insert($values)){
            $lastItem = $eventObj->getLastCreatedEvent();
            header("location:".$this->generateUrl('event', ['id'=>$lastItem['MAX(id)']]));
          }
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
      'formAction'=>$formAction,
      'currentDate'=> $currentDate
      ]);
  }

  public function contact(){

    $this->show('contact');
  }

  public function uploadPhotoEvent($id){
    var_dump($_FILES);
     // la première entrée au téléchargement
        $dossier = "c:/xampp/htdocs/mealoclock/public/assets/img/event/";
        $fichier_tmp = $_FILES["photo"]["tmp_name"];
        $fichier = $_FILES["photo"]["name"];
        $extension = strrchr($fichier, '.'); // extension de fichier téléchargé
        $extensions = array('.jpg', '.png', '.gif', '.jpeg'); // extensions possibles de fichier à télécharger
        if (in_array($extension, $extensions)) {
          $newfichier = $id . "_photo" . $extension;
          $fullPathNew = $dossier . $id . "_photo" . $extension;
          $stringData = file_get_contents($fichier_tmp);
          if (smart_resize_image($fichier_tmp, $stringData , 600, 469, true, $fullPathNew, true, false, 100)){
                    // SQL ajout de l'image dans le profil user ......
            //move_uploaded_file($fichier_tmp, $dossier . $id . "_photo" . $extension)) {
                $eventObj = new EventsManager();
                $eventObj->updatePhotoEvent($id,$newfichier);

                header('location:'.$this->generateUrl('event',['id'=>$id]));
            }
            else {
                echo "echec du téléchargement";
            }
        }
        else {
            echo  "Vous devez télécharger un fichier de format image : gif , png , jpeg";
        }

  }

public function eventRequest(){

}



}
