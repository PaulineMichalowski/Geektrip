<?php
$showListPapers = new papers();
$modifySuccess = false;
if (isset($_GET['papersId'])) {
    $showListPapers->id = $_GET['papersId'];
    $listPapers = $showListPapers->readPapers();
}
if (isset($_GET['deletePapers'])) {
    $showListPapers->deletePapers();
   header('location: listPapers.php');
exit; 
}
?>
