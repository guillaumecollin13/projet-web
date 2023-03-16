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

function chercheUser($dbh)
{
    try {
        $query = "select * from utilisateurs where loginUser=:loginUser and passWordUser=:passWordUser";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute([
            'pseudoUser' => $_POST['pseudo'],
            'passWordUser' => $_POST['password'],
        ]);
        $user = $chercheUser->fetch();
        //var_dump($user);
        if ($user) {
            $_SESSION['user'] = $user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
