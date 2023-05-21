<?php

function createUser($dbh)
{
    try {
        $query = "insert into user(userNom, userPrenom, userPseudo, userMail, userPassword) values (:userNom, :userPrenom, :userPseudo, :userMail, :userPassword)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST['Nom'],
            'userPrenom' => $_POST['Prenom'],
            'userPseudo' => $_POST['Pseudo'],
            'userMail' => $_POST['Mail'],
            'userPassword' => $_POST['Password']
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
        $connecteUser->execute([
            'userPseudo' => $_POST['pseudo'],
            'userPassword' => $_POST['password'],
        ]);
        $user = $connecteUser->fetch();
        //var_dump($user);
        $_SESSION['user']=$user;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}

function modifyUser($dbh)
{
    try {
        $query = "update user set userNom = :userNom, userPrenom = :userPrenom, userPseudo =:userPseudo , userPassword =:userPassword where userId =:userId ";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST['Nom'],
            'userPrenom' => $_POST['Prenom'],
            'userPseudo' => $_POST['Pseudo'],
            'userPassword' => $_POST['Password'],
            'userId' => $_SESSION['user'] -> userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deleteUser($dbh)
{
    try {
        $query = "delete from user where userId = :userId";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userId' => $_SESSION['user'] -> userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}

