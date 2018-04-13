<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/artworksTypes.php';
include_once 'controllers/headerController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="https://cloud.tinymce.com/stable/plugins.min.js?apiKey=jjebv96xih9h6cueaeqos4jq7fpt3jcjpvsjm244gve2k1s8"></script>
        <script>
         tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            plugins: [
               'advlist autolink lists link image charmap print preview hr anchor pagebreak',
               'tinymcespellchecker']
         });
      </script>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Geek N' Trip</title>
    </head>
    <body>
        <header>
            <!-- Navbar fixée sur le haut de la page -->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- Nom ou logo du site -->
                        <a class="navbar-brand" href="#">Geek N' Trip</a>
                    </div>
                    <!-- Barre de navigation -->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li><a href="#">En ce moment</a></li>
                        <li><a href="#">Périodes</a></li>
                        <?php
                        foreach ($menuList as $menu){
                        ?>
                        <li><a href="#"><?= $menu->name?></a></li>
                        <?php } ?>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <!-- Barre de recherche dans la barre de navigation, avec un logo en guise de bouton submit -->
                    <form class="navbar-form navbar-left" action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> 
                    <!-- Boutons inscription et connexion, collés à droite de la page, avec un logo pour chaque -->
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if (isset($_SESSION['userName'])) {
                        ?>
                        <li class="dropdown"><a data-toggle="dropdown" role="button" aria-haspopup="true" href="profile.php" ><?= $_SESSION['userName']; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if($_SESSION['idGroupUsers'] == 1){ ?>
                                <li><a href="writePapers.php">Ecrire un article</a></li>
                                <li><a href="listPapers.php">Afficher les articles</a></li>
                                <?php } ?>
                                <li><a href="?deconnexion=true">Déconnexion</a></li>
                            </ul>
                        </li>
                        
                        <?php
                        } else {
                            ?>
                        <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                       <?php
                       }
                       ?>
                        
                    </ul>
                </div>
            </nav> 
                
        </header>