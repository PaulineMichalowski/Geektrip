<?php
$formError = array();
$showProfileUsers = new users();
if (isset($_SESSION['userName'])) {
    // Récupération de la personne connectée par le mail.
    $showProfileUsers->mail = $_SESSION['mail'];
    $showProfileUsers->id = $_SESSION['id'];
}
if (isset($_GET['delete'])) {
    $showProfileUsers->deleteUser();
    session_unset();
   session_destroy();
   header('location: index.php');
exit; 
}
?>