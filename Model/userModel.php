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
function selectalluser($dbh){
    try {
        $query = "select * from user where userId !=:userId";
        $selectalluser = $dbh->prepare($query);
        $selectalluser ->execute([
            'userId' => $_SESSION['user'] -> userId
        ]);
        $alluser = $selectalluser->fetchall();
        return $alluser;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectconversation($dbh){
    try {
        $query = " SELECT * FROM user_conversation natural join conversation where userId = :userIdconnected and conversationId in (SELECT conversationId FROM user_conversation where userId =:userId) and conversationType = 'binaire';";
        $selectconversation = $dbh->prepare($query);
        $selectconversation ->execute([
            'userIdconnected' => $_SESSION['user'] -> userId,
            'userId' => $_GET['UserID']
        ]);
        $conversation = $selectconversation->fetch();
        return $conversation;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function createconversation($dbh)
{
    try {
        $query = "insert into conversation (conversationType) values ('binaire')";
        $createconversation = $dbh->prepare($query);
        $createconversation->execute();
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function createuser_conversation($dbh){
    try {
        $query = "insert into user_conversation(userId, conversationId) values (userId,1),(userIds,1);";
        $createuser_conversation = $dbh->prepare($query);
        $createuser_conversation->execute([
            'userId' => $_SESSION['user'] -> userId,
            'userIds' => $_GET['UserID']
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectMessage($dbh,$conversation){
    try {
        $query = "select * from message where userId=:userconnect || userId=:userId && conversationId=:conversationId";
        $selectMessages = $dbh->prepare($query);
        $selectMessages ->execute([
            'userconnect' => $_SESSION['user'] -> userId,
            'userId' => $_GET['UserID'],
            'conversationId'=>$conversation -> conversationId
        ]);
        $messages = $selectMessages->fetchall();
        return $messages;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function addmessage($dbh,$conversation){
    try {
        $query = "insert into message(mesageText, messageDate, userId, conversationId) values(:mesageText, :messageDate, :userId, :conversationId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'mesageText' => $_POST['message'],
            'messageDate' =>date('y/m/d'),
            //'messageHeure' => date('s,i,H'),
            'userId' => $_SESSION['user'] -> userId,
            'conversationId' => $conversation->conversationId 
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
