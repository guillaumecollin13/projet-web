<h1>page profil</h1>
<p><?= $_SESSION["user"] -> userNom ?></p>
<p><?= $_SESSION["user"] -> userPrenom ?></p>
<p><?= $_SESSION["user"] -> userPseudo ?></p>
<p><?= $_SESSION["user"] -> userPassword ?></p>
<a href="modifyprofil">modifier</a>