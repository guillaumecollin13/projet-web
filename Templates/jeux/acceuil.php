<div>
    <h1 class="colorWhite">Notre Catalogue</h1>
</div>
<div class="flex space-around card">
    <?php foreach ($jeux as $jeu) : ?>
        <div>
            <div>
                <a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>"><img src="<?= $jeu->jeuxImage ?>" alt="photo de promo du jeux" class="jeuxImage imgjeuhover"></a>
            </div>
            <div class="flex space-between">
                <h3><a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"><?= $jeu->jeuxNom ?></a></h3>
                <h3><a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"><?= $jeu->jeuxPrix ?>€</a></h3>
                <?php if ($uri == "/mesjeux") :?>
                <h3><a href="deleteJeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite">supprimer</a></h3>
                <?php endif?>
            </div>
        </div>
    <?php endforeach ?>
</div>

