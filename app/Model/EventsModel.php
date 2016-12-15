<?php
namespace Model;
class EventsModel extends \W\Model\Model
{
    public function allEvent(){
        
        $sql = 'SELECT COUNT(id) FROM ' . $this->table ;
        $sth = $this->dbh->query($sql)->fetchColumn();
        
        return $sth;
        
    }
    
    
    public function imageEvent(){
        
        //$sql = 'SELECT ';
        
    }
}