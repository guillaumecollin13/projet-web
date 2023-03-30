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
        $messageErreur=verifEmpty();
        if (!isset($messageErreur)) {
            //createUser($dbh);
            //header("location:/connexion");
        }
        var_dump($messageErreur);
    }
    require_once "Templates/users/inscription.php";
}

function verifEmpty()
{
    foreach ($_POST as $key => $value) {
        var_dump($key . ' => ' . $value);
        if (empty($value)) {
            $messageErreur[$key] = "votre ". $key ." est vide";
        }
    }
    if (isset($messageErreur)) {
        return $messageErreur;
    }else {
        return false;
    }
}
