<?php
namespace Model;


class EventsModel extends \W\Model\Model
{

    public function allEvent(){

        $sql = 'SELECT COUNT(id) FROM ' . $this->table ;
        $sth = $this->dbh->query($sql)->fetchColumn();
        return $sth;

    }

    public function getEventImage($id){
        $sql ='SELECT path FROM media INNER JOIN events ON media.id = events.media_id WHERE events.id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        return $sth->fetch();
    }
}

