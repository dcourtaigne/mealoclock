<?php
namespace Manager;

class EventsManager extends \W\Manager\Manager{

  public function getFutureEvents(){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query = "SELECT * from events as e, communities as c, users as u WHERE e.user_id = u.user_id AND e.community_id=c.community_id AND e.event_date>=:currentdate ORDER BY e.event_date DESC ";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getFutureEventsbyCom($com){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';

    $query = "SELECT * from events as e, communities as c, users as u WHERE e.user_id = u.user_id AND e.community_id=c.community_id AND e.event_date>=:currentdate AND c.community_id=:community ORDER BY e.event_date DESC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->bindValue(':community',$com);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function findEventFieldName(){
      //cette méthode sert juste à récupérer dynamiquement le noms des colonnes de la table event de la bdd
      $sql=$this->dbh->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='mealoclock' AND `TABLE_NAME`='events'");
      $emptyPost=[];
      while($column=$sql->fetch()){
        $emptyPost[$column["COLUMN_NAME"]] = "";
      }
      return $emptyPost;
    }

  public static function getValidationFilters(){
    return array(
        'event_title'      => FILTER_SANITIZE_STRING,
        'community_id'    => FILTER_SANITIZE_STRING,
        'event_desc'    => FILTER_SANITIZE_STRING,
        'event_location'    => FILTER_SANITIZE_STRING,
        'event_date'    => FILTER_SANITIZE_STRING,
        'event_time'    => FILTER_SANITIZE_STRING,
        'event_guests'    => FILTER_VALIDATE_INT
      );
  }


}
