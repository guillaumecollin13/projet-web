<?php
session_start();
//var_dump($_SESSION);
require_once "config/databaseconexion.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <ul class="flex space-around">
        <li><a href="/">Home</a></li>
        <?php if (isset($_SESSION['user'])) : ?>
            <li><a href="profil">Page profil</a>
        </li><?php endif ?></li>
        <?php if (isset($_SESSION['user'])) : ?>
            <li><a href="ajouterJeux">ajouter un Jeux a vendre</a>
        </li><?php endif ?></li>
        <li><?php if (isset($_SESSION['user'])) : ?>
                <a href="deconnexion">Deconnexion</a>
        </li><?php else : ?><a href="connexion">Connexion</a></li><?php endif ?>
           
    </ul>
    <main>
        <?php
        require_once "controller/jeuxcontroller.php";
        require_once "controller/usercontrollers.php";
        ?>
    </main>
    <footer>
        <h3> joli footer </h3>
    </footer>
</body>

</html>