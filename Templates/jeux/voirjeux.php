<div class="jeu">
  <div>
    <img src="<?= $jeu->jeuxImage ?>" alt="photo de promo du jeu">
  </div>
  <div class="blocjeu colorWhite">
    <h2><?= $jeu->jeuxNom ?></h2>
    <p><span>licence :</span> <?= $jeu->licence ?></p>
    <p><span>editeur :</span> <?= $jeu->editeurNom ?></p>
    <p><span>Prix :</span> <?= $jeu->jeuxPrix ?>€</p>
    <p><span>Date de sortie :</span> <?= $jeu->dateDeSortie ?></p>
    <p><span>En stock :</span> <?= $jeu->jeuxStock ?></p>
    <p><span>Limite d'age :</span> <?= $jeu->jeuxLimiteAge ?></p>
    <p class="description"><?= $jeu->description?></p>
  </div>
  <a href="acheter" class="achat">Acheter maintenant</a>
</div>