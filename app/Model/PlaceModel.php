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

}
