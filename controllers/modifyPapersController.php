<?php
$formError = array();
$showListPapers = new papers();
$modifySuccess = false;
if (isset($_GET['papersId'])) {
    $showListPapers->id = $_GET['papersId'];
    $listPapers = $showListPapers->readPapers();
}
if (count($_POST) > 0) {
    if (!empty($_POST['title'])) {
        $showListPapers->title = $_POST['title'];
    } else {
        $errors['title'] = 'Erreur';
    }
    if (!empty($_POST['content'])) {
        $showListPapers->content = $_POST['content'];
    } else {
        $errors['content'] = 'erreur2';
    }
    if (count($formError) == 0) {
        $showListPapers->updatePapers();
    }
}
?>
