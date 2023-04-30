<form method="post" action="">
    <H1> <?php if(isset($_SESSION["user"])) : ?> page de modification du profil <?php else : ?>page d'Inscription<?php endif?></H1>
    <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?> modifier profil <?php else : ?>Inscription<?php endif?></legend>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if(isset($_SESSION["user"])) :?><?= $_SESSION["user"] ->userNom ?><?php endif?>"<?php if(isset($_SESSION["user"])) : ?>disabled<?php endif?>>
            <?php if(isset($messageErreur["nom"])): ?> <small><?= $messageErreur["nom"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" placeholder="Prenom" class="form-control" id="Prenom" name="Prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPrenom ?><?php endif?>"<?php if(isset($_SESSION["user"])) : ?>disabled<?php endif?>>
            <?php if(isset($messageErreur["Prenom"])): ?> <small><?= $messageErreur["Prenom"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pseudo</label>
            <input type="text" placeholder="Pseudo" class="form-control" id="Pseudo" name="Pseudo" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPseudo ?><?php endif?>">
            <?php if(isset($messageErreur["Pseudo"])): ?> <small><?= $messageErreur["Pseudo"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="Mail" class="form-label">Mail</label>
            <input type="email" placeholder="Mail" class="form-control" id="Mail" name="Mail" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userMail ?><?php endif?>">
            <?php if(isset($messageErreur["Mail"])): ?> <small><?= $messageErreur["Mail"]?></small><?php endif?>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">mot de passe</label>
            <input type="<?php if(isset($_SESSION["user"])) : ?>text<?php else :?>password<?php endif?>" placeholder="Password" class="form-control" id="Password" name="Password" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPassword ?><?php endif?>">
            <?php if(isset($messageErreur["Password"])): ?> <small><?= $messageErreur["Password"]?></small><?php endif?>
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="lol">Envoyer</button>
        </div>
    </fieldset>
</form>