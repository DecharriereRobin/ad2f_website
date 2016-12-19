<?php

namespace Model;

use Model\EventsModel as Event;

class MediaModel extends \W\Model\Model
{
    public function imageEvent($id){
        $sql ='SELECT path FROM media INNER JOIN events ON media.id = events.media_id WHERE events.id = :id';
 		$sth = $this->dbh->prepare($sql);
 		$sth->bindValue(':id', $id);
 		$sth->execute();
 		return $sth->fetch();
    }
}
