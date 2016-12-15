<?php

namespace Model;


class MemberModel extends \W\Model\Model
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

    // Check if email already exists for members
    public function emailMemberExists($email)
    {
        $sql  = 'SELECT COUNT(*) FROM ' . $this->table . ' WHERE email = :email ';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();

        return $sth->fetchColumn();
    }





}
