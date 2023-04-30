<?php
try {
    $strConnection = "mysql:host=localhost;dbname=guillaume;port=3306";
    $dbh = new PDO($strConnection, "root", "root", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

} catch (PDOException $e) {
    die('erreur : '.$e -> getMessage());
}
//ecole:10.10.51.252
