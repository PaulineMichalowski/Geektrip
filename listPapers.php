<?php
include_once 'header.php';
include_once 'models/papers.php';
include_once 'controllers/listPapersController.php';
?>
<body>
    <div class="container">
            <h2 id='forms-title'>Afficher les articles</h2>
            <p>Vous verrez ici les différents articles, et vous aurez la possibilité de les consulter, les modifier ou les supprimer.</p>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titre de l'article</th>
                            <th>Date de publication</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach ($listPapers as $listPapers) { ?>
                            <tr>
                                <td ><?= $listPapers->title ?></td>
                                <td><?= $listPapers->publicationDate ?></td>
                                <td><a href="modifyPapers.php?papersId=<?= $listPapers->id ?>" class="btn btn-sample">Modifier</a></td>
                                <td><a href="listPapers.php?deletePapers=<?= $listPapers->id ?>" class="btn btn-danger">Supprimer</a></td>
                                <td><a href="#" class="btn btn-sample">Lire l'article</a></td>
                            </tr>
                        <?php } ?>
</div>