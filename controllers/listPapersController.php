<?php
$showListPapers = new papers();
$listPapers = $showListPapers->getPapers();
$success = false;
if (isset($_GET['deletePapers'])) {
    $showListPapers->id = $_GET['deletePapers'];
    if ($showListPapers->deletePapers()){
        $success = true;
        ?>
        <meta http-equiv="refresh" content="0.1;URL=/listPapers.php">
        <?php
    }
}
?>
