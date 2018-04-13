<?php
include_once 'header.php';
include_once 'models/dataBase.php';
include_once 'models/papers.php';
include_once 'controllers/modifyPapersController.php'
?>
<body>
    <div class="container">
        <h2>Modification de l'article</h2>
        <form action="modifyPapers.php?papersId=<?= $listPapers->id ?>" method="POST" class="form-group-lg">
            <div class="form-group form-group-lg">
                <p><label for="title" class="col-lg-2 control-label">Titre de l'article : </label><input type="text" class="col-lg-10 form-control" name="title" id="formGroupInputLarge" value="<?= $listPapers->title ?>"/></p>
            </div>
            <div class="form-group form-group-lg">
                <label for="paper" class="control-label">Article : </label><textarea name="content"><?= $listPapers->content ?></textarea>
            </div>
            <div class="form-group form-group-lg">
                <p><input name="update" id="update" type="submit" value="Modifier l'article" /></p>
            </div>
        </form>
    </div>
</body>