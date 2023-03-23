<?php

function createUser($dbh)
{
    try {
        $query = "insert into user(userNom, userPrenom, pseudoUser, mailUser, passwordUser) values (:userNom, :userPrenom, :pseudoUser, :mailUser, :passwordUser)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST['nom'],
            'userPrenom' => $_POST['prenom'],
            'pseudoUser' => $_POST['pseudo'],
            'mailUser' => $_POST['email'],
            'passwordUser' => $_POST['password']
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}

function conexionUser($dbh)
{
    try {
        $query = "select * from user where pseudoUser=:pseudoUser and passWordUser=:passWordUser";
        $connecteUser = $dbh->prepare($query);
        $connecteUser ->execute([
            'pseudoUser' => $_POST['pseudo'],
            'passWordUser' => $_POST['password'],
        ]);
        $user = $connecteUser->fetch();
        var_dump($user);
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
