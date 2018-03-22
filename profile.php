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
    <a href="#">Modifier le profil</a>
</div>
<?php
}
