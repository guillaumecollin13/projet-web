<?php 

function selectAllJeux($dbh)
{
    try {
        $query = "select * from jeuxEnVente ";
        $selectJeux = $dbh->prepare($query);
        $selectJeux ->execute();
        $jeux = $selectJeux->fetchall();
        return $jeux;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}