<?php
namespace Manager;

class UsersManager extends \W\Manager\UserManager{

  public static function getValidationFilters() {
      return array(
        'user_name'      => FILTER_SANITIZE_STRING,
        'user_email'    => FILTER_SANITIZE_STRING,
        'password'    => FILTER_SANITIZE_STRING,
      );
    }

}
