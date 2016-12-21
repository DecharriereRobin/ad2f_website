<?php

namespace Model;

use Model\SliderModel;

class AssociationModel extends \W\Model\Model
{
    public function getSlider(){
        $sql ='SELECT path FROM media INNER JOIN slider ON media.id = slider.media_id';
        $sth = $this->dbh->prepare($sql);
 		$sth->execute();
 		return $sth->fetch();
    }
}
