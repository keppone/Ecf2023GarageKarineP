<?php if (isset($_SESSION['errors'])): ?>

<?php foreach($_SESSION['errors'] as $errorsArray): ?>
    <?php foreach($errorsArray as $errors): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?> 
        </div>
    <?php endforeach ?>
<?php endforeach ?>
<?php endif ?>
<?php session_destroy(); ?>

<?php if(isset($_GET['success'])): ?>
    <div class="alert alert-danger"> Vos identifiants sont erronées</div>
<?php endif ?>

<h1>Connexion</h1>

<form action="/login" method="POST">
    <div class="form-group">
        <label for="email">Adresse e-mail</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="text" class="form-control" name="password" id="password" ">
    </div>

  <button type="submit" class="btn btn-primary">Se Connecter</button>
</form>