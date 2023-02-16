<?php
try {
    $dbh = new PDO('mysql:host=10.10.51.252;dbname=guillaume', 'guillaume', 'root');
    
} catch (PDOException $e) {
    die('erreur : '.$e -> getMessage());
}
?>