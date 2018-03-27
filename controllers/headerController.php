<?php
//récupération du get et deconnexion
if (isset($_GET['deconnexion'])) {
    session_unset();
   session_destroy();
   header('location: index.php');
exit; 
}
$artworksMenu = new artworksTypes();
$menuList = $artworksMenu->getArtworksTypes();
