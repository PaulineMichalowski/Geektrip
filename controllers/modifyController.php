<?php
$users = new users();
$regName = '#^[A-Z]{1}[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[-\']?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+$#';
$regBirthDate = '/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/';
$regMail = '#[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regUserName = '^([a-zA-Z0-9(àáâãäåçèéêëìíîïðòóôõöùúûüýÿÂÊÎÔÛÄËÏÖÜÀÆæÇÉÈŒœÙğ)-_]{2,36})$^';
$modifySuccess = false;
$formError = array();
$users->id = $_SESSION['id'];
if (isset($_POST['modify'])) {
    if (isset($_POST['lastname'])) {
    $users->lastname = htmlspecialchars($_POST['lastname']);
    if (!preg_match($regName, $users->lastname)) {
        $formError['lastname'] = 'Le nom n\'est pas correct';
    }
}
if (isset($_POST['firstname'])) {
    $users->firstname = htmlspecialchars($_POST['firstname']);
    if (!preg_match($regName, $users->firstname)) {
        $formError['firstname'] = 'Le prenom n\'est pas correct';
    }
}
if (isset($_POST['birthdate'])) {
    $users->birthdate = htmlspecialchars($_POST['birthdate']);
    if (!preg_match($regBirthDate, $users->birthdate)) {
        $formError['birthdate'] = 'La date de naissance n\'est pas correcte';
    }
}
if (isset($_POST['mail'])) {
    $users->mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regMail, $users->mail)) {
        $formError['mail'] = 'L\'adresse mail n\'est pas correcte';
    }
}
if (isset($_POST['userName'])) {
    $users->userName = htmlspecialchars($_POST['userName']);
    if (!preg_match($regUserName, $users->userName)) {
        $formError['userName'] = 'Le nom d\'utilisateur n\'est pas correct';
    }
}
if (count($formError) == 0) {
    if (!$users->modifyUser()) {
        $formError['add'] = 'Erreur lors de l\'ajout';
    } else {
        $modifySuccess = true;
        $users->lastname = '';
        $users->firstname = '';
        $users->birthdate = '';
        $users->mail = '';
        $users->userName = '';
        $users->password = '';
    }
}
}