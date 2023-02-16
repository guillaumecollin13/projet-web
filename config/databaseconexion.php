
<?php
try {
    $strConnection = "mysql:host=10.10.51.98;dbname=immobilier port=3306";
    $dbh = new PDO($strConnection, "guillaume","root",);
    
} catch (PDOException $e) {
    die('erreur : '.$e -> getMessage());
}
?>