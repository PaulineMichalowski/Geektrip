<?php
include_once 'header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/modifyController.php';
?>
<div class="container">
    <h2 id='forms-title'>Modification du profil</h2>
<form action="#" method="POST" class="form-group-lg">
    <div class="form-group form-group-lg">
        <p><label for="lastname" class="col-lg-2 control-label <?= isset($formError['lastname']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Nom : </label><input type="text" class="col-lg-10 form-control" name="lastname" id="formGroupInputLarge" value="<?= $_SESSION['lastname'] ?>" /></p>
        <p><label for="firstname" class="col-lg-2 control-label <?= isset($formError['firstname']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Prénom : </label><input type="text" class="col-lg-10 form-control" name="firstname" id="formGroupInputLarge" value="<?= $_SESSION['firstname'] ?>" /></p>
        <p><label for="birthdate" class="col-lg-2 control-label <?= isset($formError['birthdate']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Date de naissance : </label><input type="date" class="col-lg-10 form-control" name="birthdate" value="<?= $_SESSION['birthdate'] ?>" /></p>
        <p><label for="mail" class="col-lg-2 control-label <?= isset($formError['mail']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Adresse mail : </label><input type="text" class="col-lg-10 form-control" name="mail" id="formGroupInputLarge" value="<?= $_SESSION['mail'] ?>" /></p>
    </div>
    <div class="form-group form-group-lg">
        <p><label for="userName" class="col-lg-2 control-label <?= isset($formError['userName']) ? 'inputError' : '' ?>" for="formGroupInputLarge">Nom d'utilisateur : </label><input type="text" class="col-lg-10 form-control" name="userName" id="formGroupInputLarge" value="<?= $_SESSION['userName'] ?>"/></p>
    </div>
    <div class="form-group form-group-lg">
        <p><input name="modify" id="modify" type="submit" value="Modifier" /></p>
    </div>
</form>
</div>
