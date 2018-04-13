<?php
if (isset($_POST['submit'])) {    
    $sendPapers = new papers;
    $insertSuccess = false;
    $formError = array();
    $sendPapers->title = $_POST['title'];
    $sendPapers->content = $_POST['content'];
        if ($sendPapers->sendPapers()) {
            $insertSuccess = true;
        } else {
            $formError['add'] = 'Erreur lors de l\'ajout';
    }
}