<h1 class="colorWhite">Page de profil</h1>
<div class="blocjeu colorWhite">
    <p><?= $_SESSION["user"] -> userNom ?></p>
    <p><?= $_SESSION["user"] -> userPrenom ?></p>
    <p><?= $_SESSION["user"] -> userPseudo ?></p>
    <p><?= $_SESSION["user"] -> userMail ?></p>
    <p><?= $_SESSION["user"] -> userPassword ?></p>
</div>
<div class="flex space-around">
    <a href="modifyprofil" class="achat">modifier</a>
    <a href="deletprofil " class="achat">suprimmer</a>
</div>
