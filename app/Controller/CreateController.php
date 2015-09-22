<?php

namespace Controller;
use \W\Controller\Controller;
use Manager\UsersManager;


class CreateController extends Controller{
  public function signup(){
    $errors=[];
    if (!empty($_POST)){
      // vérification que les champs sont bien remplis
      if(empty($_POST['user_name'])) $errors['name'] = "Veuillez indiquer votre nom";
      if(empty($_POST['user_email'])) $errors['email'] = "Veuillez indiquer votre nom";
      if(empty($_POST['password'])) $errors['password'] = "Veuillez indiquer votre mot de passe ";
      if(empty($_POST['passwordrepeat'])) $errors['passwordrepeat'] = "Veuillez répéter votre mot de passe ";
      if($_POST['password'] !== $_POST['passwordrepeat']) $errors['passwords'] = "les mots de passe ne correspondent pas";

      $user = new UsersManager;

      if($user->getUserByUsernameOrEmail($_POST['user_name'])) $errors['name'] = "Ce nom est déjà utilisé!";
      if($user->getUserByUsernameOrEmail($_POST['user_email'])) $errors['email'] = "Un compte est déjà associé à cet e-mail";



      if(empty($errors)){
        $filters = UsersManager::getValidationFilters();
        $values = filter_input_array(INPUT_POST, $filters);
        $values['password'] = password_hash($values['password'], PASSWORD_DEFAULT);
        //$user = new UsersManager;
        $user->insert($values);
        $errors['status'] = 1;
        //header('Location:'.$this->redirectToRoute('home'));
      }else{
        $errors['status'] = 0 ;
      }
    $this->showJson($errors);
    }

}

}
