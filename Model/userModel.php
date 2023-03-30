<?php

function createUser($dbh)
{
    try {
        $query = "insert into user(userNom, userPrenom, pseudoUser, mailUser, passwordUser) values (:userNom, :userPrenom, :pseudoUser, :mailUser, :passwordUser)";
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
