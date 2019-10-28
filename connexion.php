<?php
// Inclusion de header.php sur la page.
require_once(__DIR__.'/partials/header.php');

$email = $password = null;

if(!empty($_POST)) {

    $email      = $_POST['email']; 
    $password   = $_POST['password']; 
    $errors = [];

    if(empty($email)) {
        $errors['email'] = 'Vous avez oublié votre email';
    }

    if(empty($password)) {
        $errors['password'] = 'Vous avez oublié votre mot de passe';
    }

    if(empty($errors)) {
        // -- Je procède à l'inscription en base.
        // -- Puis redirection sur la page de connexion.
    }
}

?>

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Connexion</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" class="form-horizontal">
            <div class="form-group">
                    <input type="email" 
                        class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                        name="email"
                        value="<?= $email ?>"
                        placeholder="Email.">
                        <div class="invalid-feedback">
                            <?= isset($errors['email']) ? $errors['email'] : '' ?>
                        </div>
                </div>
                <div class="form-group">
                    <input type="password" 
                        class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                        name="password"
                        placeholder="Mot de passe.">
                        <div class="invalid-feedback">
                            <?= isset($errors['password']) ? $errors['password'] : '' ?>
                        </div>
                </div>
                <button class="btn btn-block btn-dark">
                    Connexion
                </button>
            </form>
        </div>
    </div>
</div>

<?php
// Inclusion de footer.php sur la page.
require_once(__DIR__.'/partials/footer.php');
?>