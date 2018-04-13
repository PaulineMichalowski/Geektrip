<?php
include_once 'header.php';
include_once 'models/dataBase.php';
include_once 'models/papers.php';
include_once 'controllers/deletePapersController.php'
?>
<body>
    <div class="container">
        <h2>Suppression de l'article</h2>
        <form action="modifyPapers.php?papersId=<?= $listPapers->id ?>" method="POST" class="form-group-lg">
            <div class="form-group form-group-lg">
                <p><label for="title" class="col-lg-2 control-label">Titre de l'article : </label><input type="text" class="col-lg-10 form-control" name="title" id="formGroupInputLarge" value="<?= $listPapers->title ?>"/></p>
            </div>
            <div class="form-group form-group-lg">
                <label for="paper" class="control-label">Article : </label><textarea name="content"><?= $listPapers->content ?></textarea>
            </div>
            <div class="form-group form-group-lg">
                <p><input name="deletePapers" id="deletePapers" type="submit" value="Supprimer l'article" /></p>
            </div>
        </form>
    </div>
</body>