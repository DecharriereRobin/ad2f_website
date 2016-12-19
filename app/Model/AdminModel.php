<?php
namespace Model;
class AdminModel extends \W\Model\Model
{
    // trouver le id par rapport au token
     public function findID($token)
     {
 		$sql = 'SELECT id FROM ' . $this->table . ' WHERE token = :token LIMIT 1';
 		$sth = $this->dbh->prepare($sql);
 		$sth->bindValue(':token', $token);
 		$sth->execute();
 		return $sth->fetch();
         var_dump( $sth);
     }
     public function tokenExists($token)
 	{
 	   $sql = 'SELECT token FROM ' . $this->table .' WHERE token = :token LIMIT 1';
 	   $sth = $this->dbh->prepare($sql);
 	   $sth->bindValue(':token', $token);
 	   if($sth->execute()){
 	       $foundUser = $sth->fetch();
 	       if($foundUser){
 	           return true;
 	       }
 	   }
 	   return false;
 	}
}
