<?php

namespace Model;

use Model\SliderModel;

class SliderModel extends \W\Model\Model
{
    
    
     public function getSliderImage($position){
        $sql ='SELECT path FROM media INNER JOIN slider ON media.id = slider.media_id WHERE slider.position = :position';
        $sth = $this->dbh->prepare($sql);
 		$sth->bindValue(':position', $position);
 		$sth->execute();
 		return $sth->fetch();
    }
    
    
    
    
}