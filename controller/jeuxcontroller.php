<?php
require_once 'Model/jeuxModel.php';
require_once 'Model/selectmodel.php';
$uri = $_SERVER["REQUEST_URI"];


if ($uri === "/index.php" || $uri === "/") {
    $jeux = selectAllJeux($dbh);
    //var_dump($jeux);
    require_once "Templates/jeux/acceuil.php";
} elseif (isset($_GET["jeuxID"]) && $uri === "/voirjeux?jeuxID=" . $_GET["jeuxID"]) {
    //var_dump($_GET);
    $jeu = selectOneJeu($dbh);
    var_dump($jeu);
    require_once "Templates/jeux/voirjeux.php";
} elseif ($uri === "/createJeux") {
 if (isset($_POST["btnEnvoi"])) {
    addJeux($dbh);
    $jeuxId = $dbh->lastInsertId();
    for ($i=0; $i <count($_post["plateformes"]) ; $i++) { 
        $plateformeId = $_POST["plateformes"][$i];
        addplateforme($dbh,$jeuxId,$plateformeId);
    }
 }
    $licences = selectallLicence($dbh);
    $editeurs = selectallediteur($dbh);
    $plateformes = selectallplateforme($dbh);
    require_once('Templates/jeux/createOrEditjeu.php');
}