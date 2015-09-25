<?php
namespace Controller;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use Manager\UsersManager;


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
    $user = new UsersManager();
    $thisId = intval($id);
    $thisUser = $user->find(intval($thisId));
    $thisUser['communities'] = $user ->getUserCommunities($thisId);

    $eventsOrg = $user->getUserEvents($thisId);
    $eventsOrgDateFR = Controller::getFrenchDate($eventsOrg);
    $thisUser['eventsOrg'] = $eventsOrgDateFR;

    $eventsPart = $user->getUserParticipations($thisId);
    $eventsPartDateFR = Controller::getFrenchDate($eventsPart);
    $thisUser['eventsPart'] = $eventsPartDateFR;

    $this->show('userProfile', ['thisUser'=>$thisUser]);
  }

public function updateProfile(){
    $this->show('updateProfile');
  }


}
