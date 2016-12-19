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
                    '<span class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-xs-8 col-xs-push-2 center-block text-center btn btn-success btn-sm hidden-print">
                        Paiement validé
                    </span><br>' :
                    '<span class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-xs-8 col-xs-push-2 center-block btn btn-warning btn-sm hidden-print">
                        Paiement en attente
                    </span><br>';
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