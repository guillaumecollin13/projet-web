<div>
    <?php if ($uri == "/mesjeux") : ?>

        <h1 class="colorWhite">vos jeux mis en vente</h1>
    <?php else : ?>
        <h1 class="colorWhite">Notre Catalogue</h1>
    <?php endif ?>
</div>
<div class="flex space-around card">
    <?php foreach ($jeux as $jeu) : ?>
        <div >
            <div>
                <a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>"><img src="<?= $jeu->jeuxImage ?>" alt="photo de promo du jeux" class="jeuxImage imgjeuhover"></a>
            </div>
            <div class="flex space-between">
                <h3><a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"><?= $jeu->jeuxNom ?></a></h3>
                <h3><a href="voirjeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"><?= $jeu->jeuxPrix ?>€</a></h3>
            </div>
            <?php if ($uri == "/mesjeux") : ?>
                    <h3><a href="modifyJeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"> modifier  </a></h3>
                    <h3><a href="deleteJeux?jeuxID=<?= $jeu->jeuxID ?>" class="link colorWhite"> supprimer  </a></h3>
                <?php endif ?>
        </div>
    <?php endforeach ?>
</div>