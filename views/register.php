<h1>S'enregistrer us</h1>

<form method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="subject" class="form-label">Nom </label>
                <input type="text" name="subject" class="form-control" id="subject">
            </div>

        </div>
        <div class="col">
            <div class="mb-3">
                <label for="subject" class="form-label">Prénom </label>
                <input type="text" name="subject" class="form-control" id="subject">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe </label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="password2" class="form-label">Retapez de passe </label>
        <input type="password" name="password2" class="form-control" id="password2">
    </div>
    <p>Déjà un compte ? <a href="/login">Se connecter</a> </p>
    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>