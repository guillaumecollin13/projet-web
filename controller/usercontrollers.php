<?php

require_once 'Model/userModel.php';

$uri = $_SERVER["REQUEST_URI"];
//var_dump($_POST);
if ($uri === "/connexion") {
    var_dump($_POST);
    if (isset($_POST["btnEnvoi"])) {
        conexionUser($dbh);
        header("location:/");
    }
    require_once "Templates/users/connexion.php";
} elseif ($uri == "/deconnexion") {
   session_destroy();
    header("location:/");
} elseif ($uri == "/inscription") {
    if (isset($_POST["btnEnvoi"])) {
        //var_dump("lol");
        createUser($dbh);
    }
    require_once "Templates/users/inscription.php";
}
