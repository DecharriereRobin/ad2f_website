<?php
namespace Model;


class EventsModel extends \W\Model\Model
{

    public function allEvent(){

        $sql = 'SELECT COUNT(id) FROM ' . $this->table ;
        $sth = $this->dbh->query($sql)->fetchColumn();
        return $sth;

    }

    public function findAllCategorie(){
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE category = "carnaval"';
        $sth = $this->dbh->prepare($sql);
        //$sth->bindValue(':category', $category);
        $sth->execute();
        return $sth->fetch();
    }

}
