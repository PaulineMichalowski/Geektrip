<?php
// J'inclus d'abord le header afin d'avoir accès à la navbar
include_once 'header.php';
// J'inclue ensuite mes models, ici dataBase et users, parente et enfant. L'inclusion de dataBase permet de se connecter à la base de données, et users.php fait appel aux méthodes.
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/inscriptionController.php';
?>
<body>
    <div class="container">
        <div>
            <h2 id='forms-title'>Inscription</h2>
        </div>
        <div>
            <?php foreach ($formError as $Error) { ?>
            <p><?= $Error ?></p>
            <?php } ?>
        </div>
        <form action="#" method="POST" class="form-group-lg">
            <div class="form-group form-group-lg">
                <p><label for="lastname" class="col-lg-2 control-label <?= isset($formError['lastname']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Nom : </label><input type="text" class="col-lg-10 form-control" name="lastname" id="formGroupInputLarge" value="<?= $users->lastname ?>" /></p>
                <p><label for="firstname" class="col-lg-2 control-label <?= isset($formError['firstname']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Prénom : </label><input type="text" class="col-lg-10 form-control" name="firstname" id="formGroupInputLarge" value="<?= $users->firstname ?>" /></p>
                <p><label for="birthdate" class="col-lg-2 control-label <?= isset($formError['birthdate']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Date de naissance : </label><input type="date" class="col-lg-10 form-control" name="birthdate" value="<?= $users->birthdate ?>" /></p>
                <p><label for="mail" class="col-lg-2 control-label <?= isset($formError['mail']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Adresse mail : </label><input type="text" class="col-lg-10 form-control" name="mail" id="formGroupInputLarge" value="<?= $users->mail ?>" /></p>
            </div>
            <div class="form-group form-group-lg">
                <p><label for="userName" class="col-lg-2 control-label <?= isset($formError['userName']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Nom d'utilisateur : </label><input type="text" class="col-lg-10 form-control" name="userName" id="formGroupInputLarge" value="<?= $users->userName ?>"/></p>
                <p><label for="password" class="col-lg-2 control-label <?= isset($formError['password']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Mot de passe : </label><input type="password" class="col-lg-10 form-control" name="password" id="formGroupInputLarge"/></p>
            </div>
            <div class="form-group form-group-lg">
                <p><input name="submit" id="submit" type="submit" value="Valider" /></p>
            </div>
        </form>
                <?php
                if ($insertSuccess) { ?>
        <div class="formValid col-lg-offset-5 col-lg-2">
                   <?php echo 'Inscription réussie';
                } ?>
        </div>
    </div>
</body>
</html>
