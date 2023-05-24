<?php 
function selectallLicence($dbh){
    try {
        $query = "select * from licence";
        $selectLicences = $dbh->prepare($query);
        $selectLicences ->execute();
        $licences = $selectLicences->fetchall();
        return $licences;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectallediteur($dbh){
    try {
        $query = "select * from editeur";
        $selectEditeur = $dbh->prepare($query);
        $selectEditeur ->execute();
        $Editeurs = $selectEditeur->fetchall();
        return $Editeurs;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectallplateforme($dbh){
    try {
        $query = "select * from plateforme";
        $selectPlateforme = $dbh->prepare($query);
        $selectPlateforme ->execute();
        $plateforme = $selectPlateforme->fetchall();
        return $plateforme;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function addplateforme($dbh,$jeuxId,$plateformeId){
    try {
        $query = "insert into plateforme_jeux (plateformeID, jeuxId) values (:plateformeID,:jeuxId)";
        $addplateforme = $dbh->prepare($query);
        $addplateforme ->execute([
            "plateformeID"  => htmlentities($plateformeId),
            "jeuxId" => htmlentities($jeuxId)
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deletePlateformeJeux($dbh){
    try {
        $query = 'delete from plateforme_jeux where  jeuxId= :jeuxId';
        $deleteOne = $dbh->prepare($query);
        $deleteOne->execute([
            'jeuxId'=> $_GET["jeuxID"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}