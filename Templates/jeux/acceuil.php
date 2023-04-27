<h1>Page d'acceuil</h1>

<?php foreach ($jeux as $jeu ) :?>
    <div>   
        <h2> <?= $jeu -> jeuxNom ?> </h2>
        <img src="<?= $jeu -> jeuxImage ?>" alt="photo de promo du jeux">
        <p><span><?= $jeu ->  ?></span></p><p><span><?= $jeu ->  ?></span></p>
        <p>date de sortie </p>
        <p>jeux prix</p>
        <p>stock</p>
        <p>limite d'age</p>
    </div>
    
    <?php endforeach ?>