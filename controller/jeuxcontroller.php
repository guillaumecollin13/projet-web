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
    $plateformes=selectPlateformeJeu($dbh);
    var_dump($jeu);
    require_once "Templates/jeux/voirjeux.php";
} elseif ($uri === "/createJeux") {
 if (isset($_POST["btnEnvoi"])) {
    //var_dump($_POST);
    addJeux($dbh);
    $jeuxId = $dbh->lastInsertId();
    for ($i=0; $i <count($_POST["plateforrme"]) ; $i++) { 
      $plateformeId = $_POST["plateforrme"][$i];
        addplateforme($dbh,$jeuxId,$plateformeId);
    }
    header("/mesjeux");
 }
    $licences = selectallLicence($dbh);
    $editeurs = selectallediteur($dbh);
    $plateformes = selectallplateforme($dbh);
    require_once('Templates/jeux/createOrEditjeu.php');
}elseif ($uri == "/mesjeux") {
    $jeux=selectsuerjeux($dbh);
    require_once "Templates/jeux/acceuil.php";
}elseif (isset($_GET["jeuxID"]) && $uri === "/deleteJeux?jeuxID=" . $_GET["jeuxID"]) {
    //var_dump($_GET);
   deletePlateformeJeux($dbh); 
   deleteJeux($dbh); 
   header("/mesjeux");
}