<?php
namespace Manager;

class Users_events_participationsManager extends \W\Manager\Manager{

	public function deleteGuest($id, $eventId){
		$sql="DELETE FROM `users_events_participations` WHERE guest_id=:id AND event_id=:idevent";
		$deleteQuery = $this->dbh->prepare($sql);
    	$deleteQuery->bindValue(':id',(int)$id);
    	$deleteQuery->bindValue(':idevent',(int)$eventId);
    	$deleteQuery->execute();
    	return 1;
	}

  public function updateRequest($id, $eventId,$status){
    $sql = "UPDATE `users_events_participations` SET `status`=:status WHERE guest_id=:id AND event_id=:idevent";
    $updateQuery = $this->dbh->prepare($sql);
    $updateQuery->bindValue(':id',(int)$id);
    $updateQuery->bindValue(':idevent',(int)$eventId);
    $updateQuery->bindValue(':status',$status);
    $updateQuery->execute();
  }


}
