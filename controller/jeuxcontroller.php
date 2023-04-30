<?php
require_once 'Model/jeuxModel.php';
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
}
