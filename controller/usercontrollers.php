<?php

require_once 'Model/userModel.php';
require_once 'Model/jeuxModel.php';

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
        var_dump("coucou"); 
       $messageErreur = verifEmpty(); 
       var_dump($messageErreur); 
       if (!$messageErreur) {
        var_dump("coucou"); 
        createUser($dbh);
            header("location:/connexion");
          
        }
        var_dump($messageErreur);
    }
    require_once "Templates/users/inscriptionoredit.php";

} elseif ($uri == "/profil") {
    require_once "Templates/users/profil.php";
} elseif ($uri == "/modifyprofil") {
    if (isset($_POST["btnEnvoi"])) {
        modifyUser($dbh);
        header("location:/profil");
    }
    require_once "Templates/users/inscriptionoredit.php";
} elseif ($uri == "/deletprofil") {
    deleteUser($dbh);
    deletealljeuxuser($dbh);
    session_destroy();
    header("location:/");
}elseif ($uri == "/conversation") {
    $allusers=selectalluser($dbh);
    //var_dump($allusers);
    require_once "Templates/users/seeAllUser.php";
} elseif (isset($_GET["UserID"]) && $uri === "/conversation?UserID=" . $_GET["UserID"]) {
    $conversation=selectconversation($dbh);
    if($conversation!==Null) {
        var_dump('$conversation');
        //$messages=selectMessage($dbh,$conversation);
        //var_dump($messages);
        require_once "Templates/users/discussions.php";
   }
   else {
    //createconversation($dbh);
    //$conversationId = $dbh->lastInsertId();
    //createuser_conversation($dbh, $conversationId);
    var_dump('lol');
   }
   if (isset($_POST["btnEnvoi"])) {
    addmessage($dbh,$conversation);
}
   
}


function verifEmpty()
{
    foreach ($_POST as $key => $value) {
        var_dump($key . ' => ' . $value);
        if (empty($value)) {
            $messageErreur[$key] = "votre " . $key . " est vide";
        }
    }
    if (isset($messageErreur)) {
        return $messageErreur;
    } else {
        return false;
    }
}