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
function addJeux($dbh){
    try {
        $query = "insert into jeuxenvente (jeuxNom, jeuxLimiteAge, dateDeSortie, jeuxPrix, jeuxStock, description, jeuxImage, userId, licenceID, editeurID) values(:jeuxNom, :jeuxLimiteAge, :dateDeSortie, :jeuxPrix, :jeuxStock, :description, :jeuxImage, :userId, :licenceID, :editeurID)";
        $addJeux = $dbh->prepare($query);
        $addJeux->execute([
            'jeuxNom' => $_POST['jeuNom'],
            'jeuxLimiteAge' => $_POST['jeuxLimiteDage'],
            'dateDeSortie' => $_POST['dateSortie'],
            'jeuxPrix' => $_POST['jeuxprix'],
            'jeuxStock' => $_POST['stock'],
            'description'=>$_POST['description'],
            'jeuxImage'=>$_POST['image'],
            'licenceID'=>$_POST['licence'],
            'editeurID'=>$_POST['Editeur'],
            'userId' => $_SESSION['user'] -> userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deleteAlljeuxUser($dbh){
    try {
        $query = 'delete from jeuxenvente where userId=:userId';
        $deleteAll = $dbh->prepare($query);
        $deleteAll->execute([
            'userId' => $_SESSION['user'] -> userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectsuerjeux($dbh)
{
    try {
        $query = "select * from jeuxEnVente inner JOIN licence ON jeuxenvente.licenceID = licence.licenceID inner join editeur on jeuxenvente.editeurID = editeur.editeurID where userId = :userId ";
        $selectJeu = $dbh->prepare($query);
        $selectJeu ->execute([
            'userId'=>$_SESSION['user'] -> userId
        ]);
        $jeu = $selectJeu->fetchall();
        return $jeu;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectPlateformeJeu($dbh){

    try {
        $query = "select * from plateforme where plateformeID in (select plateformeId from plateforme_jeux where jeuxId= :jeuxId);";
        $selectPlateforme = $dbh->prepare($query);
        $selectPlateforme ->execute([
            'jeuxId'=> $_GET["jeuxID"]
        ]);
        $plateformes = $selectPlateforme->fetchall();
        return $plateformes;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deleteJeux($dbh){
    try {
        $query = 'delete from jeuxenvente where  jeuxId= :jeuxId';
        $deleteOne = $dbh->prepare($query);
        $deleteOne->execute([
            'jeuxId'=> $_GET["jeuxID"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}