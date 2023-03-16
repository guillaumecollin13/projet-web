<?php
require_once "config/databaseconexion.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="connexion">Connexion</a></li>
    </ul>
    <main>
        <?php
        require_once "controller/jeuxcontroller.php";
        require_once "controller/usercontrollers.php"
        ?>
    </main>
    <footer>
        <h3>  joli footer  </h3>
    </footer>
</body>

</html>