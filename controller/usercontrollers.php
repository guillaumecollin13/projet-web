<?php

require_once 'Model/userModel.php';

$uri = $_SERVER["REQUEST_URI"];
//var_dump($_POST);
if ($uri === "/connexion") {
    if (isset($_POST["btnEnvoi"])) {
        chercheUser($dbh);
    }
    require_once "Templates/users/connexion.php";
} elseif ($uri == "/inscription") {
    if (isset($_POST["btnEnvoi"])) {
        //var_dump("lol");
        createUser($dbh);
    }
    require_once "Templates/users/inscription.php";
}
