<?php
$formError = array();
$showProfileUsers = new users();
if (isset($_SESSION['userName'])) {
    // Récupération de la personne connectée par le mail.
    $showProfileUsers->mail = $_SESSION['mail'];
    $showProfileUsers->id = $_SESSION['id'];
}
if (!empty($_POST['lastname'])) {
    $showProfileUsers->lastname = strip_tags($_POST['lastname']);
    if (!preg_match($regName, $showProfileUsers->lastname)) {
       $formError['lastname'] = 'Le nom entré n\'est pas correct. Veillez à mettre une majuscule au début du nom.';
    }else {
       $formError['lastname'] = 'Le champ est vide. Veillez à le remplir correctement.';
    }
    if (!empty($_POST['firstname'])) {
        $showProfileUsers->firstname = strip_tags($_POST['firstname']);
        if (!preg_match($regName, $showProfileUsers->firstname)) {
            $formError['firstname'] = 'Le prénom entré n\'est pas correct. Veillez à mettre une majuscule au début du prénom, et éventuellement au second s\'il y a lieu';
        }else {
            $formError['firstname'] = 'Le champ est vide. Veillez à le remplir correctement.';
        }
    }
    if (!empty($_POST['birthdate'])) {
        $showProfileUsers->firstname = strip_tags($_POST['birthdate']);
        if (!preg_match($regBirthDate, $showProfileUsers->birthdate)) {
            $formError['birthdate'] = 'La date de naissance n\'est pas correcte, veillez à entrer une date au format jj/mm/aaaa';
        }else {
            $formError['birthdate'] = 'Le champ est vide. Veillez à le remplir correctement.';
        }
    }
}
?>