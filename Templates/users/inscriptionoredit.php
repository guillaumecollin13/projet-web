<div class="flex center">
    <H1 class="colorWhite"> <?php if(isset($_SESSION["user"])) : ?> page de modification du profil <?php else : ?>page d'Inscription<?php endif?></H1>
</div> 
<div class="flex center">  
    <form method="post" action="">
    <div class="m">
            <label for="Nom" class="">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="Nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userNom ?><?php endif?>">
            <?php if(isset($messageErreur["Nom"])): ?> <small><?= $messageErreur["Nom"]?></small><?php endif?>
        </div>
        <div class="m">
            <label for="Prenom" class="">Prenom</label>
            <input type="text" placeholder="Prenom" class="form-control" id="Prenom" name="Prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPrenom ?><?php endif?>">
            <?php if(isset($messageErreur["Prenom"])): ?> <small><?= $messageErreur["Prenom"]?></small><?php endif?>
        </div>
        <div class="">
            <label for="" class="">Pseudo</label>
            <input type="text" placeholder="Pseudo" class="form-control" id="Pseudo" name="Pseudo" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPseudo ?><?php endif?>">
            <?php if(isset($messageErreur["Pseudo"])): ?> <small><?= $messageErreur["Pseudo"]?></small><?php endif?>
        </div>
        <div class="">
            <label for="Mail" class="">Mail</label>
            <input type="email" placeholder="Mail" class="form-control" id="Mail" name="Mail" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userMail ?><?php endif?>"<?php if(isset($_SESSION["user"])) : ?>disabled<?php endif?>>
            <?php if(isset($messageErreur["Mail"])): ?> <small><?= $messageErreur["Mail"]?></small><?php endif?>
        </div>
        <div class="">
            <label for="Password" class="">mot de passe</label>
            <input type="<?php if(isset($_SESSION["user"])) : ?>text<?php else :?>password<?php endif?>" placeholder="Password" class="form-control" id="Password" name="Password" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"] ->userPassword ?><?php endif?>">
            <?php if(isset($messageErreur["Password"])): ?> <small><?= $messageErreur["Password"]?></small><?php endif?>
        </div>
        <div>
            <button type="submit" name="btnEnvoi" class="" value="lol"><?php if (isset($_SESSION['user'])): ?> modifier <?php else: ?> s'inscrire<?php endif ?></button>
        </div>
        <div class="flex center">
            <h3 class="text-danger"><a href="connexion" class="link">Déjà un compte ?</a></h3>
        </div>
    </form>
</div>
