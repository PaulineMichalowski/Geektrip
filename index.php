<?php include 'header.php'; ?>
<!-- Texte de présentation du site -->
<div class="jumbotron text-center">
    <h1>Bienvenue sur Geek N' Trip</h1>
    <p>Le site de voyage spécialisé dans la culture "geek" !</p>
    <p>Partez à la rencontre de Nathan Drake, de la famille Stark ou encore des Hobbits !</p>
</div>
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicateurs des différentes slides du carroussel -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Défilement des slides, dans l'ordre d'apparition -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/Uncharted" alt="Image Uncharted 4">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/GameOfThrones" alt="Image Game Of Thrones">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/seigneur2" alt="Image Seigneur des Anneaux">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <!-- Controle du slider, au clic sur les boutons. Passe outre l'automatisme de défilement -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>