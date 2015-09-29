<?php
namespace Manager;

class EventsManager extends \W\Manager\Manager{

  public function getFutureEvents(){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query="select e.id, e.event_title, e.event_desc, e.event_guests, e.event_date, e.event_time, e.event_location, e.event_address, e.event_image,
                    e.event_image, e.user_id, e.community_id, u.user_name, c.com_name, c.com_shortname
              from events e
              join communities c on (e.community_id = c.id)
              join users u on (e.user_id = u.id)
              WHERE e.event_date>=:currentdate
              ORDER BY e.event_date ASC, e.event_time ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getFutureEventsbyCom($com){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query="select e.id, e.event_title, e.event_desc, e.event_guests, e.event_date, e.event_time, e.event_location, e.event_address, e.event_image,
                    e.event_image, e.user_id, e.community_id, u.user_name, c.com_name, c.com_shortname
              from events e
              join communities c on (e.community_id = c.id)
              join users u on (e.user_id = u.id)
              WHERE e.event_date>=:currentdate AND e.community_id=:community
              ORDER BY e.event_date ASC, e.event_time ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->bindValue(':community',$com);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getFutureEventDates(){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query = "SELECT DISTINCT event_date from events WHERE 'event_date'>=:currentdate";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getFutureEventDatesbyCom($com){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query = "SELECT DISTINCT event_date from events WHERE 'event_date'>=:currentdate AND community_id=:community";
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

    public function getEventGuests($id, $status="confirmed"){
    $query = "select u.user_name, u.id, uep.message, uep.status, uep.event_id, u.user_desc, u.user_photo, e.event_title
              from events e
              join users_events_participations uep on (e.id = uep.event_id)
              join users u on (uep.guest_id = u.id)
              WHERE e.id=:id AND uep.status=:status
              ORDER BY u.user_name ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->bindValue(':status',$status);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getAllEventGuests($id){
    $query = "select u.user_name, u.id, uep.message, uep.status
              from events e
              join users_events_participations uep on (e.id = uep.event_id)
              join users u on (uep.guest_id = u.id)
              WHERE e.id=:id
              ORDER BY u.user_name ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getEventInfo($id){
    $query = "select e.id, e.event_title, e.event_desc, e.event_guests, e.event_date, e.event_time, e.event_location, e.event_image, e.user_id, u.user_name, e.community_id, c.com_name, c.com_shortname
              from events e
              join communities c on (e.community_id = c.id)
              join users u on (e.user_id = u.id)
              WHERE e.id=:id";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }


  public static function getValidationFilters(){
    return array(
        'event_title'      => array('filter'    => FILTER_SANITIZE_STRING,
                                    'flags'     => FILTER_FLAG_NO_ENCODE_QUOTES),
        'community_id'    => FILTER_SANITIZE_NUMBER_INT,
        'event_desc'    => array('filter'    => FILTER_SANITIZE_STRING,
                                  'flags'     => FILTER_FLAG_NO_ENCODE_QUOTES),
        'event_location'    => FILTER_SANITIZE_STRING,
        'event_date'    => FILTER_SANITIZE_STRING,
        'event_time'    => FILTER_SANITIZE_STRING,
        'event_guests'    => FILTER_SANITIZE_NUMBER_INT
      );
  }

  public function getLastCreatedEvent(){
    $selectQuery = $this->dbh->query("SELECT MAX(id) from events LIMIT 1");
    return $selectQuery->fetch();
  }

  public function updatePhotoEvent($id,$newfichier){
    $sql = "UPDATE events SET `event_image`=:pic WHERE id =:id";
    $eventUpdate = $this->dbh->prepare($sql);
    $eventUpdate->bindValue(':pic',$newfichier);
    $eventUpdate->bindValue(':id',(int)$id);
    $eventUpdate->execute();
  }


  public function getEventRequests($id){
    $query = "select u.user_name, u.id, uep.message, uep.status
              from events e
              join users_events_participations uep on (e.id = uep.event_id)
              join users u on (uep.guest_id = u.id)
              WHERE e.id=:id
              ORDER BY u.user_name ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }


}
