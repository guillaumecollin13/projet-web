<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="pseudo" class="form-label">pseudonyme</label>
                <input type="text" placeholder="pseudonyme" class="form-control" id="pseudo" name="pseudo" value="">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="password" class="form-control" id="Password" name="password" value="">
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary">Envoi</button>
            </div>
        </fieldset>
    </form>
    <div>
        <h3 class="text-danger">Pas encore inscrit ?</h3>
        <a href="inscription" class="btn btn-secondary">Clique</a>
    </div>
</div>