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
        return ($member['paid']) ? 
                    '<span class="btn btn-success col-lg-11" style="margin-top: 2%;margin-left: 4%;margin-bottom: 5%">
                        Paiement validé
                    </span>' :
                    '<span class="btn btn-warning col-lg-11" style="margin-top: 2%;margin-left: 4%;margin-bottom: 5%">
                        Paiement en attente
                    </span>';
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
