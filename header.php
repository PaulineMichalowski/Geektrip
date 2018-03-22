<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/headerController.php';
include_once 'controllers/connexionController.php';
include_once 'controllers/inscriptionController.php';
include_once 'controllers/profileController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
            
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
                        <li><a href="#">Jeux</a></li>
                        <li><a href="#">Films</a></li>
                        <li><a href="#">Séries</a></li>
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
                        <li><a href="profile.php"><?= $_SESSION['userName']; ?></a></li>
                        <li><a href="?deconnexion=true">Déconnexion</a></li>
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