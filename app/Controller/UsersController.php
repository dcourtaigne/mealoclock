<?php
namespace Controller;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use Manager\UsersManager;
use Manager\EventsManager;
use Manager\CommunitiesManager;
use Manager\Communities_membersManager;
use Manager\Users_events_participationsManager;


class UsersController extends Controller{

  public function signup(){
    //initialisation du tableau d'erreurs que l'on passera à la vue
    $errors=[];
    if (isset($_POST['user_name'])){
      // vérification que les champs sont bien remplis
      if(empty($_POST['user_name'])) $errors['name'] = "Veuillez indiquer votre nom";
      if(empty($_POST['user_email'])) $errors['email'] = "Veuillez indiquer votre nom";
      if(empty($_POST['password'])) $errors['password'] = "Veuillez indiquer votre mot de passe ";
      if(empty($_POST['passwordrepeat'])) $errors['passwordrepeat'] = "Veuillez répéter votre mot de passe ";
      if($_POST['password'] !== $_POST['passwordrepeat']) $errors['passwords'] = "les mots de passe ne correspondent pas";
      // initialisation d'un objet user pour d'une part vérifier si le nom ou l'email existe déjà dans la base
      // et d'autre part si tout est ok, faire l'insertion du nouvel utilisateur dans la base de données
      $user = new UsersManager;
      // comparaison des champs Nom et email du formulaire d'inscription avec les champs user_name et user_email
      // si Oui, alimentation du tableau d'erreurs que l'on passera à la vue.
      if($user->getUserByUsernameOrEmail($_POST['user_name'])) $errors['name'] = "Ce nom est déjà utilisé!";
      if($user->getUserByUsernameOrEmail($_POST['user_email'])) $errors['email'] = "Un compte est déjà associé à cet e-mail";
      // si les champs du formulaire ont bien été rempli et que le nom de user et l'e-mail ne sont pas déjà utilisé, on peut insérer dans la base de données
      if(empty($errors)){
        //récupération des filtres pour les champ string - nom, e-mail et password
        $filters = UsersManager::getValidationFilters();
        //application des filtres sur la constante INPUT_POST qui contient les données du formulaire
        $values = filter_input_array(INPUT_POST, $filters);
        //cryptage du mot de passe
        $values['password'] = password_hash($values['password'], PASSWORD_DEFAULT);
        //insertion dans la base donnée
        $user->insert($values);
        //si tout se passe bien on ajoute l'index status = 1 dans le tableau d'erreur. Ceci permettra de tester la valeur de cet index avec javascript
        //et de fermer la modale si cette valeur est 1
        $errors['status'] = 1 ;
      }else{
        //s'il y a des erreurs on ajoute l'index status = 0 dans le tableau d'erreur. Ceci permettra d'indiquer à JS de garder la modale ouverte
        //et d'afficher les erreurs
        $errors['status'] = 0 ;
      }
    $this->showJson($errors);
    }

  }

  public function login(){
    //initialisation du tableau d'erreurs que l'on passera à la vue
    $errors=[];
    //test si le formulaire a été rempli
    if(isset($_POST['user_name'])){
      //on "nettoie" les données de l'utilisateur
      $username = filter_var($_POST['user_name'],FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

      //intitialisation d'un objet user pour récupérer les infos de l'utilisateur
      $userManager = new UsersManager();
      $user = $userManager->getUserByUsernameOrEmail($username);
      //intitialisation d'un objet authetification pour tester les valeur de login rentrées par l'utilisateur
      $auth = new AuthentificationManager();

      if($auth->isValidLoginInfo($username, $password)){
        //si tout est ok on utlise la foinction de login de base (initialisation de la surper globale $_SESSION)
        $auth->logUserIn($user);
        //on indique le statut 1 dans le tableau d'erreur pour dire que tout est ok (à js)
        $errors['status'] = 1;
      }else{
        //Si les infos utilisateurs ne sont pas corrects, on oindique statut 0 et on indique le message d'erreur qui sera afficher dans la modale par js
        $errors['status'] = 0;
        $errors['message'] = "E-mail ou mot de passe incorrect";
      }
      //Envoie du tableau d'erreur au format JSON dans la fonction de callback Ajax qui a appelé cette méthode (voir loginsignup.js)
      $this->showJson($errors);
    }

  }

  public function logout(){
    // utilisation de la fonction de base logout -> destruction de la variable $_SESSION;
    $auth = new AuthentificationManager();
    $auth->logUserOut();
    $this->redirectToRoute('home');


  }

  public function userProfile($id){
    $authObj = new AuthentificationManager();
    $userLogin = $authObj->getLoggedUser();

    if($userLogin){
      $user = new UsersManager();
      $thisId = intval($id);
      $thisUser = $user->find($thisId);
      $thisUser['create_time'] = formatDateFR(substr($thisUser['create_time'], 0, 10));
      $thisUser['communities'] = $user ->getUserCommunities($thisId);

      $eventsOrg = $user->getUserEvents($thisId);
      $eventsOrgDateFR = Controller::getFrenchDate($eventsOrg);
      if(!empty($eventsOrgDateFR)){
        for($i=0;$i<count($eventsOrgDateFR);$i++){
          $eventsOrgDateFR[$i]['event_time']=formatTime($eventsOrgDateFR[$i]['event_time']);
        }
      }
      $thisUser['eventsOrg'] = $eventsOrgDateFR;

      $eventsPart = $user->getUserParticipations($thisId,'confirmed');
      $eventsPartDateFR = Controller::getFrenchDate($eventsPart);
      if(!empty($eventsPartDateFR)){
        for($i=0;$i<count($eventsPartDateFR);$i++){
          $eventsPartDateFR[$i]['event_time']=formatTime($eventsPartDateFR[$i]['event_time']);
        }
      }
      $thisUser['eventsPart'] = $eventsPartDateFR;

      if($userLogin['id'] == $thisUser['id']){
        $thisUser['greeting'] = 'Bienvenue, '.ucfirst($thisUser['user_name']);
        $thisUser['orgTitle'] = 'J\'organise';
        $thisUser['partTitle'] = 'Je participe';
      }else{
        $thisUser['greeting'] = 'Bienvenue sur le profil de '.ucfirst($thisUser['user_name']);
        $thisUser['orgTitle'] = 'Evénement(s) organisé(s) par '.ucfirst($thisUser['user_name']);
        $thisUser['partTitle'] = 'Evénement(s) au(x)quel(s) participe '.ucfirst($thisUser['user_name']);
      }

      $this->show('userProfile', ['thisUser'=>$thisUser]);
    } else{
      $this->show('requireLogin');
    }

  }
//méthode modification de profile
public function updateProfile(){
    $authObj = new AuthentificationManager();
    $userLogin = $authObj->getLoggedUser();
    $userObj = new UsersManager();
    $userCom = $userObj->getUserCommunities($userLogin['id']);


    if($userLogin){
      $comObj = new CommunitiesManager();
      $communities = $comObj->findAll();

      if (!empty($_POST)){
        //var_dump($_POST);
        $profile = [];
        $comMemberObj = new Communities_membersManager();
        //var_dump($userCom);
        $profile['user_desc']=filter_var($_POST['user_desc'], FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
        $userObj->update($profile, $userLogin['id']);

        $selectedCom = $_POST['community_id'];
        $previousCom = [];

        foreach ($userCom as $com) {
          $previousCom[] = $com['id'];
        }
        for($i = 0 ; $i<count($previousCom);$i++){
          if(!in_array($previousCom[$i],$selectedCom)){
            $comMemberObj->deleteComMembership($userLogin['id'], $previousCom[$i]);
          }
        }

        for($i = 0 ; $i<count($selectedCom);$i++){
          if(!in_array($selectedCom[$i],$previousCom)){
            $comToAdd = ['user_id'=>$userLogin['id'], 'community_id'=> $selectedCom[$i]];
            $comMemberObj->insert($comToAdd);
          }
        }

        header('Location: '.$this->generateUrl('userProfile',['id'=>$userLogin['id']]));

        }

      $user = $userObj->find($userLogin['id']);
      $user['com'] = $userCom;
      //var_dump($user);
      $this->show('updateProfile',['user'=>$user , 'communities'=>$communities]);
    }else{
      $this->show('requireLogin');
    }


  }

public function displayEvents(){
  $authObj = new AuthentificationManager();
  $userLogin = $authObj->getLoggedUser();

  if($userLogin){
    $thisUserId = $userLogin['id'];
    $results=[];
    $userObj=new UsersManager();
    $results['orgEvents'] = $userObj->getUserEvents($thisUserId);
    $results['confirmedEvents'] = $userObj->getUserParticipations($thisUserId,'confirmed');
    $results['pendingEvents'] = $userObj->getUserParticipations($thisUserId,'tobeconfirmed');

    $eventObj=new EventsManager();


    for($i=0 ; $i<count($results['orgEvents']); $i++) {
      $results['orgEvents'][$i]['time'] = formatTime($results['orgEvents'][$i]['event_time']);
      $results['orgEvents'][$i]['dateFR'] = formatDateFR($results['orgEvents'][$i]['event_date']);
    }

    for($i=0 ; $i<count($results['confirmedEvents']); $i++) {
      $results['confirmedEvents'][$i]['time'] = formatTime($results['confirmedEvents'][$i]['event_time']);
      $results['confirmedEvents'][$i]['dateFR'] = formatDateFR($results['confirmedEvents'][$i]['event_date']);
    }

    for($i=0 ; $i<count($results['pendingEvents']); $i++) {
      $results['pendingEvents'][$i]['time'] = formatTime($results['pendingEvents'][$i]['event_time']);
      $results['pendingEvents'][$i]['dateFR'] = formatDateFR($results['pendingEvents'][$i]['event_date']);
    }

    $this->show('myevents',['events'=>$results]);
  }else{
    $this->show('requireLogin');
  }

}


public function getEventRequests($id){
    $eventId = intval($id);
    $eventObj=new EventsManager();
    $userObj = new UsersManager();
    $results=$eventObj->getEventGuests($eventId, $status="tobeconfirmed");

    for($i=0;$i<count($results);$i++){
      $part = $userObj->getUserParticipations(intval($results[$i]['id']),'confirmed');
      $results[$i]['countPart'] = count($part);
      $org = $userObj->getUserEvents(intval($results[$i]['id']));
      $results[$i]['countOrg'] = count($org);
    }
    if($results){
    $this->show('eventrequests',['requests'=>$results]);
    }else{
      $this->redirectToRoute('myEvents');
    }
  }

public function loginJS(){
  $status=["status"=>1];
  $this->showJson($status);
}


public function uploadPhotoProfile($id){
        $app = getApp();
        $baseURL = $app->getConfig('base_url');

        $dossier = 'c:/xampp/htdocs'.$baseURL.'/assets/img/avatar/';
        $fichier_tmp = $_FILES["photo"]["tmp_name"];
        $fichier = $_FILES["photo"]["name"];
        $extension = strrchr($fichier, '.'); // extension de fichier téléchargé
        $extensions = array('.jpg', '.png', '.gif', '.jpeg'); // extensions possibles de fichier à télécharger
        if (in_array($extension, $extensions)) {
          $newfichier = $id . "_photo" . $extension;
          $newfichierThumb = $id . "_photoThumb" . $extension;
          $fullPathNew = $dossier . $newfichier;
          $fullPathNewThumb = $dossier . $newfichierThumb;
          $stringData = file_get_contents($fichier_tmp);
          if (smart_resize_image($fichier_tmp, $stringData , 250, 250, true, $fullPathNew, false, false, 100)){
              smart_resize_image($fichier_tmp, $stringData , 50, 50, true, $fullPathNewThumb, true, false, 100);
                    // SQL ajout de l'image dans le profil user ......
            //move_uploaded_file($fichier_tmp, $dossier . $id . "_photo" . $extension)) {
                $userObj = new UsersManager();
                $userObj->updatePhotoProfile($id,$newfichier);
                $userObj->updatePhotoProfileThumb($id,$newfichierThumb);
                header('location:'.$this->generateUrl('userProfile',['id'=>$id]));
            }
            else {
                echo "echec du téléchargement";
            }
        }
        else {
            echo  "Vous devez télécharger un fichier de format image : gif , png , jpeg";
        }


}

public function confirmEventRequest($id, $iduser){
  echo $id.'<br>';
  echo $iduser.'<br>';
  $uepObj = new Users_events_participationsManager();
  $uepObj->updateRequest($iduser, $id,'confirmed');
  $this->redirectToRoute('getEventRequests',['id'=>$id]);
}

public function rejectEventRequest($id, $iduser){
  echo $id.'<br>';
  echo $iduser.'<br>';
  $uepObj = new Users_events_participationsManager();
  $uepObj->updateRequest($iduser, $id,'rejected');
  $this->redirectToRoute('getEventRequests',['id'=>$id]);
}

public function deleteProfile(){
  $authObj = new AuthentificationManager();
  $userLogin = $authObj->getLoggedUser();
  $thisId=intval($userLogin['id']);
  $userObj = new UsersManager();

  $events = $userObj->getUserEvents($thisId);
  if(!empty($events)){
    $eventObj = new EventsManager();
    foreach ($events as $event) {
      $fakeUser=["user_id"=>999];
      $eventObj->update($fakeUser,$event['id']);
    }
  }

  $fakeUser=999;
  $comObj = new Communities_membersManager();
  $comObj->updateFakeUser($fakeUser, $thisId);
  $uepObj = new Users_events_participationsManager();
  $uepObj->updateFakeUser($fakeUser, $thisId);

  $authObj->logUserOut();
  $userObj->deleteUser($userLogin['id']);
  $this->redirectToRoute('home');

}


}
