<form method="post" action="">
    <H1>creation de la vente</H1>
    <fieldset>
        <legend>infos sur le jeux</legend>
        <div class="mb-3">
            <label for="jeuxNom" class="form-label">Nom du jeux</label>
            <input type="text" placeholder="jeuxNom" class="form-control" id="jeuxNom" name="jeuxNom" value="">
        </div>
        <div class="mb-3">
            <label for="limiteAge" class="form-label">limite d'age</label>
            <input type="text" placeholder="limiteAge" class="form-control" id="limiteAge" name="limiteAge" value="">
        </div>
        <div class="mb-3">
            <label for="dateSortie" class="form-label">date de sortie</label>
            <input type="date" placeholder="dateSortie" class="form-control" id="dateSortie" name="dateSortie" value="">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">prix</label>
            <input type="text" placeholder="prix" class="form-control" id="prix" name="prix" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" placeholder="description" class="form-control" id="description" name="description" value="">
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="lol">Envoyer</button>
        </div>
    </fieldset>
</form>