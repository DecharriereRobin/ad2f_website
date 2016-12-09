<?php

namespace Model;

class MembersModel extends \W\Model\Model
{
    // Members Count
    public function countMembers()
    {
        $sql  = 'SELECT COUNT(*) FROM ' . $this->table;
        $resp = $this->dbh->query($sql);

        return $resp->fetchColumn();
    }

    // Members Paid Status
    public static function getPaidStatus($member)
    {
        return ($member['paid']) ? 'Validé' : 'En attente';
    }

}
