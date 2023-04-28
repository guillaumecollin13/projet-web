<h1>Page d'acceuil</h1>

<?php foreach ($jeux as $jeu) : ?>
    <div class="">
        <h2> <?= $jeu->jeuxNom ?> </h2>
        <img src="<?= $jeu->jeuxImage ?>" alt="photo de promo du jeux">
        <p><span>licence : <?= $jeu->licence  ?></span></p>
        <p><span>editeur : <?= $jeu->editeurNom ?></span></p>

        <p><?= $jeu->jeuxPrix  ?>€</p>
        <a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>">voir le jeux</a></p>
    </div>

<?php endforeach ?>


<p><?= $jeu->dateDeSortie  ?></p>
<p><?= $jeu->jeuxStock  ?></p>
<p><?= $jeu->jeuxLimiteAge ?></p>