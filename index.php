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
    <title>gaming store</title>
    <link rel="icon" href="Image\logo.png">
    <link rel="stylesheet" href="CSS\style.css">
    <link rel="stylesheet" href="CSS\flex.css">
    <link rel="stylesheet" href="CSS\form.css">
    <link rel="stylesheet" href="CSS\jeu.css">
</head>
<body>
    <header>
        <nav class="flex space-between">
            <div class="navbar-left">
                <a href="/"><img src="Image\logo.png" alt="Logo"></a>
            </div>
            <ul class="flex space-around ">
                    
                    <li>
                        <?php if (isset($_SESSION['user'])): ?>
                        <a href="deconnexion" class="colorWhite link">Deconnexion</a>
                    </li>
                    <?php else: ?><a href="connexion" class="colorWhite link">Connexion</a></li>
                    <?php endif ?>
                </ul>
                <ul>
                <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="profil" class="colorWhite link">Page de profil</a></li>
                    <?php endif ?>
                </ul>
                <ul>
                <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="createJeux" class="colorWhite link"> creer jeux</a></li>
                    <?php endif ?>
                </ul>
                <ul>
                <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="/mesjeux" class="colorWhite link"> mes jeux</a></li>
                    <?php endif ?>
                </ul>
                <ul>
                <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="/conversation" class="colorWhite link"> discuter</a></li>
                    <?php endif ?>
                </ul>
            <div class="navbar-right flex">
                <form action="#" method="get">
                    <input type="search" name="q" placeholder="Rechercher...">
                    <button type="submit"><img src="Image\icon-search.png" alt="" style="height: 16px;"></button>
                </form>
            </div>
        </nav>
        
        <div class="header-image">
            <svg class="header-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#272727" fill-opacity="1" d="M0,160L1440,320L1440,320L0,320Z"></path>
            </svg>
        </div>
    </header>
    <main>
        <?php
            require_once "controller/jeuxcontroller.php";
            require_once "controller/usercontrollers.php";
        ?>
    </main>
</body> 
</html>
