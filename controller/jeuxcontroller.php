<?php
require_once 'Model/jeuxModel.php';
$uri = $_SERVER["REQUEST_URI"];


if ($uri === "/index.php" || $uri === "/") {
    $jeux=selectAllJeux($dbh);
    var_dump($jeux);
    require_once "Templates/jeux/acceuil.php";
}
