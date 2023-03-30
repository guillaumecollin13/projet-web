<?php

function createUser($dbh)
{
    try {
        $query = "insert into user(userNom, userPrenom, userPseudo, userMail, userPassword) values (:userNom, :userPrenom, :userPseudo, :userMail, :userPassword)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST['nom'],
            'userPrenom' => $_POST['prenom'],
            'userPseudo' => $_POST['pseudo'],
            'userMail' => $_POST['email'],
            'userPassword' => $_POST['password']
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}

function conexionUser($dbh)
{
    try {
        $query = "select * from user where userPseudo=:userPseudo and userPassword=:userPassword";
        $connecteUser = $dbh->prepare($query);
        $connecteUser ->execute([
            'userPseudo' => $_POST['pseudo'],
            'userPassword' => $_POST['password'],
        ]);
        $user = $connecteUser->fetch();
        var_dump($user);
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function updateUser($pdo){
    try {
        $query = "update utilisateur set utilisateurLastname = :utilisateurLastname, utilisateurSurname = :utilisateurSurname, utilisateurMdp = :utilisateurMdp where utilisateurID = :utilisateurID";
        $changeUser = $pdo->prepare($query);
        $changeUser->execute([
            'utilisateurLastname' => $_POST['nom'],
            'utilisateurSurname' => $_POST['prenom'],
            'utilisateurMdp' => $_POST['mot_de_passe'],
            'utilisateurID' =>  $_SESSION['user'] -> utilisateurID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    }
    function updateSession($pdo){
        try {
            $query = "select * FROM utilisateur WHERE utilisateurID = :utilisateurID";
            $chercheUser = $pdo->prepare($query);
            $chercheUser->execute([
                'utilisateurID' => $_SESSION['user'] -> utilisateurID
            ]);
            $user = $chercheUser -> fetch();
                $_SESSION['user']=$user;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    }