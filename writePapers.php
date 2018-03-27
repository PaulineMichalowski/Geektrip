<?php
include_once 'header.php';
include_once 'models/papers.php';
include_once 'controllers/writePapersController.php';
?>
<body>
    <div class="container">
        <div>
            <h2 id='forms-title'>Ecrire un article</h2>
            <p>Tu peux ici écrire un article, qui sera corrigé, peut-être validé et mis en ligne.</p>
        </div>
        <form action="#" method="POST" class="form-group-lg">
            <div class="form-group form-group-lg">
                <p><label for="title" class="col-lg-2 control-label">Titre de l'article : </label><input type="text" class="col-lg-10 form-control" name="title" id="formGroupInputLarge"/></p>
            </div>
            <div class="form-group form-group-lg">
                <label for="paper" class="control-label">Article : </label><textarea name="content"></textarea>
            </div>
            <div class="form-group form-group-lg">
                <p><input name="submit" id="submit" type="submit" value="Envoyer pour validation" /></p>
            </div>
        </form>
        <?php
                if ($insertSuccess) { 
                    ?>
        <div class="formValid col-lg-offset-5 col-lg-2">
                   <?php echo 'Inscription réussie';
                } ?>
        </div>
    </body>