<div class="flex center">
    <H1 class="colorWhite"> page de <?php if(isset($jeu)) : ?>modification<?php else :?>création<?php endif?></H1>
</div>
<div class="flex center">
    <form method="post" action="">
        <div class="">
            <label for="jeuNom" class="">nom du jeu</label>
            <input type="text" placeholder="jeuNom" class="form-control" id="jeuNom" name="jeuNom" value="<?php if(isset($jeu)) : ?><?= $jeu ->jeuxNom ?><?php endif?>">
        </div>
        <div class="">
            <label for="jeuxLimiteDage" class="">limite d'age</label>
            <input type="text" placeholder="jeuxLimiteDage" class="form-control" id="jeuxLimiteDage" name="jeuxLimiteDage" value="<?php if(isset($jeu)) : ?><?= $jeu ->jeuxLimiteAge ?><?php endif?>">
        </div>
        <div class="">
            <label for="dateSortie" class="">date de sortie </label>
            <input type="date" placeholder="dateSortie" class="form-control" id="dateSortie" name="dateSortie" value="<?php if(isset($jeu)) : ?><?= $jeu ->dateDeSortie ?><?php endif?>">
        </div>
        <div class="">
            <label for="jeuxprix" class="">prix</label>
            <input type="text" placeholder="jeuxprix" class="form-control" id="jeuxprix" name="jeuxprix" value="<?php if(isset($jeu)) : ?><?= $jeu ->jeuxPrix ?><?php endif?>">
        </div>
        <div class="">
            <label for="description" class="">description</label>
            <input type="text" placeholder="description" class="form-control" id="description" name="description" value="<?php if(isset($jeu)) : ?><?= $jeu ->description ?><?php endif?>">
        </div>
        <div class="">
            <label for="stock" class="">stock</label>
            <input type="text" placeholder="stock" class="form-control" id="stock" name="stock" value="<?php if(isset($jeu)) : ?><?= $jeu ->jeuxStock ?><?php endif?>">
        </div>
        <div class="">
            <label for="image" class="">image source</label>
            <input type="text" placeholder="image" class="form-control" id="image" name="image" value="<?php if(isset($jeu)) : ?><?= $jeu ->jeuxImage ?><?php endif?>">
        </div>
        <div class="">
            <label for="selectLicence">licence</label>
            <select name="licence" id="selectLicence">

                <?php foreach ($licences as $licence) : ?>
                    <option value="<?= $licence->licenceID ?>"<?php if(isset($jeu)) : ?> <?php if($licence->licenceID === $jeu->licenceID) : ?> selected <?php endif?> <?php endif?>><?= $licence->licence ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="">
            <label for="selectEditeur">Editeur</label>
            <select name="Editeur" id="selectEditeur">

                <?php foreach ($editeurs as $editeur) : ?>
                    <option value="<?= $editeur->editeurID ?>"<?php if(isset($jeu)) : ?> <?php if($editeur->editeurID ===$jeu->editeurID) : ?> selected <?php endif?><?php endif?>><?= $editeur->editeurNom ?></option>
                <?php endforeach ?>
            </select>
            </div>
            <div>
            <label for="selectPlateforme">Plateforme</label>
            <select name="plateforrme[]" id="selectPlateforme" multiple required>

                <?php foreach ($plateformes as $plateforme) : ?>
                    <option value="<?= $plateforme->plateformeID ?>"<?php if(isset($jeu)) : ?><?php foreach ($plateformesjeux as $plateformesjeu) : ?><?php if($plateforme->plateformeID ===$plateformesjeu->plateformeID) : ?> selected <?php endif?><?php endforeach?><?php endif?>><?= $plateforme->plateformeNom ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            
            <button type="submit" name="btnEnvoi" class="" value="lol"><?php if(isset($jeu)) : ?>modifier<?php else :?>créer<?php endif?></button>
    </form>
</div>