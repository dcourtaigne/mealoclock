<?php
namespace Manager;

class Communities_membersManager extends \W\Manager\Manager{

	public function deleteComMembership($id, $comId){
		$sql="DELETE FROM `communities_members` WHERE user_id=:id AND community_id=:com";
		$deleteQuery = $this->dbh->prepare($sql);
    	$deleteQuery->bindValue(':id',(int)$id);
    	$deleteQuery->bindValue(':com',(int)$comId);
    	$deleteQuery->execute();
	}

	public function find($id, $comId){
		$sql="SELECT * FROM `communities_members` WHERE user_id=:id AND community_id=:com";
		$selectQuery = $this->dbh->prepare($sql);
    	$selectQuery->bindValue(':id',(int)$id);
    	$selectQuery->bindValue(':com',(int)$comId);
    	$selectQuery->execute();
    	return $selectQuery->fetchAll();
	}

}