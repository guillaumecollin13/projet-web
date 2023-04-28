<?php 

function selectAllJeux($dbh)
{
    try {
        $query = "select * from jeuxEnVente inner JOIN licence ON jeuxenvente.licenceID = licence.licenceID inner join editeur on jeuxenvente.editeurID = editeur.editeurID ";
        $selectJeux = $dbh->prepare($query);
        $selectJeux ->execute();
        $jeux = $selectJeux->fetchall();
        return $jeux;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectOneJeu($dbh){
    try {
        $query = "select * from jeuxEnVente inner JOIN licence ON jeuxenvente.licenceID = licence.licenceID inner join editeur on jeuxenvente.editeurID = editeur.editeurID where jeuxID = :jeuxID ";
        $selectJeu = $dbh->prepare($query);
        $selectJeu ->execute([
            'jeuxID'=> $_GET["jeuxID"]
        ]);
        $jeu = $selectJeu->fetch();
        return $jeu;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}