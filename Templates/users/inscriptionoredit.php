<form method="post" action="">
    <H1> <?php if(isset($_SESSION["user"])) : ?> page de modification du profil <?php else : ?>page d'Inscription<?php endif?></H1>
    <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?> modifier profil <?php else : ?>Inscription<?php endif?></legend>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if(isset($_SESSION["user"])) : ?><?php $_SESSION["user"] ->userNom ?><?php else :?>coucou<?php endif?>">
            <?php if(isset($messageErreur["nom"])): ?> <small><?= $messageErreur["nom"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="text" placeholder="Prenom" class="form-control" id="Prenom" name="Prenom" value="<?php if(isset($_SESSION["user"])) : ?><?php $_SESSION["user"] ->userPrenom ?><?php endif?>">
            <?php if(isset($messageErreur["Prenom"])): ?> <small><?= $messageErreur["Prenom"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="pseudo" class="form-label">pseudonyme</label>
            <input type="text" placeholder="pseudonyme" class="form-control" id="pseudo" name="pseudo" value="<?php if(isset($_SESSION["user"])) : ?><?php $_SESSION["user"] ->userPseudo ?><?php endif?>">
            <?php if(isset($messageErreur["pseudo"])): ?> <small><?= $messageErreur["pseudo"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="<?php if(isset($_SESSION["user"])) : ?>disabled<?php else : ?>email<?php endif?>" placeholder="Email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["user"])) : ?><?php $_SESSION["user"] ->userMail ?><?php endif?>">
            <?php if(isset($messageErreur["email"])): ?> <small><?= $messageErreur["email"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Mot de passe</label>
            <input type="<?php if(isset($_SESSION["user"])) : ?>text<?php else : ?>password<?php endif?>" placeholder="password" class="form-control" id="Password" name="password" value="<?php if(isset($_SESSION["user"])) : ?><?php $_SESSION["user"] ->userPassword ?><?php endif?>">
            <?php if(isset($messageErreur["password"])): ?> <small><?= $messageErreur["password"]?></small><?php endif?>
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="evoyer"><?php if(isset($_SESSION["user"])) : ?>modifier<?php else : ?>Envoyer<?php endif?></button>
        </div>
    </fieldset>
</form>