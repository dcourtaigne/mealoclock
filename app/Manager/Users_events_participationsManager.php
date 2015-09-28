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


}