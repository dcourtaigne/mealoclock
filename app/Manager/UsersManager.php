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

 /* public function getUserInfos($id){
    $query = "SELECT * from users WHERE u.id=:id";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }*/

  public function getUserEvents($id){
    $query = "select event_title, event_desc, event_date, event_time, event_location, event_image, u.user_name, e.id
              from events e
              join users u on (e.user_id = u.id)
              WHERE user_id=:id
              ORDER BY event_date ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }




  public function getUserCommunities($id){
    $query = "select c.id, c.com_name, c.com_shortname
              from communities c
              join communities_members cm on (c.id = cm.community_id)
              join users u on (cm.user_id = u.id)
              WHERE u.id=:id";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getUserParticipations($id,$status){
    $query = "select e.event_title, e.event_desc, e.event_date, e.event_time, e.event_location, e.event_image, u2.user_name
              from events e
              join users_events_participations uep on (e.id = uep.event_id)
              join users u on (uep.guest_id = u.id)
              join users u2 on (e.user_id = u2.id)
              WHERE u.id=:id AND uep.status=:status
              ORDER BY e.event_date ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':id',(int)$id);
    $eventQuery->bindValue(':status',$status);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getUserComments($id){

 /*   SELECT * from users as u, events as e, communities as c, users_events_participation as uep, communities_members as cm, comment as co
    WHERE
    u.id=c.user_id=e.user_id=uep.guest_id=cm.user_id=:id &&
*/
  }

  public function updatePhotoProfile($id,$newfichier){
    $sql = "UPDATE users SET `user_photo`=:pic WHERE id =:id";
    $userUpdate = $this->dbh->prepare($sql);
    $userUpdate->bindValue(':pic',$newfichier);
    $userUpdate->bindValue(':id',(int)$id);
    $userUpdate->execute();
  }


}
