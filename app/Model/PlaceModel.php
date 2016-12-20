<?php
namespace Model;
class PlaceModel extends \W\Model\Model
{
    public function findplace()
    {
        $sql = 'SELECT * FROM ' . $this->table .'GROUP BY categorie DESC';
 		$sth = $this->dbh->prepare($sql);
 		$sth->execute();
 		return $sth->fetchAll();
    }
    public function getPlaceByCategorie($categorie)
    {
        $sql = 'SELECT * FROM ' . $this->table .' WHERE categorie = :categorie';
 		$sth = $this->dbh->prepare($sql);
        $sth->bindValue(':categorie', $categorie);
 		$sth->execute();
 		return $sth->fetchAll();
    }
}