<?php 
include_once 'header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
?>
<body>
    <div class="container">
        <div>
            <h2 id='inscription-title'>Connexion</h2>
            <p>Connecte toi pour avoir accès à du contenu personnalisé</p>
        </div>
        <form action="#" method="POST" class="form-group-lg">
            <div class="form-group form-group-lg">
                <p><label for="mail" class="col-lg-2 control-label">Adresse mail : </label><input type="email" class="col-lg-10 form-control" name="mail" id="formGroupInputLarge" value=""/></p>
                <p><label for="password" class="col-lg-2 control-label">Mot de passe : </label><input type="password" class="col-lg-10 form-control" name="password" id="formGroupInputLarge"/></p>
            </div>
            <div class="form-group form-group-lg">
                <p><input name="submit" id="submit" type="submit" value="Valider" /></p>
            </div>
        </form>
        <p>
                <?php
                if ($connectSuccess) { ?>
        <div class="formValid col-lg-offset-5 col-lg-2">
                   <?php echo 'Vous êtes connecté(e) !';
                } ?>
        </div>
    </p>
    
