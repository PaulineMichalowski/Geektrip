<?php 
include_once 'header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/profileController.php';
    ?>
<div class="container">
    <p>Informations du profil</p>
    <?php 
    if ($_SESSION['userName']) {
        ?>
    <p>Adresse mail : <?= $_SESSION['mail'] ?></p>
    <p>Nom d'utilisateur : <?= $_SESSION['userName'] ?></p>
    <p>Nom : <?= $_SESSION['lastname'] ?></p>
    <p>Prénom : <?= $_SESSION['firstname'] ?></p>
    <p>Date de naissance : <?= $_SESSION['birthdate'] ?></p>
    <div class="btn-group">
    <a class="btn btn-info" href="modify.php">Modifier le profil</a>
    <a class="btn btn-danger" href="?delete=true" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Vous ne pourrez plus récupérer les données !'));">Supprimer le profil</a>
    </div>
</div>
<?php
}
