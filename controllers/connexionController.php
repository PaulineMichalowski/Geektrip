<?php
$isOk = 0;
$userConnection = new users();
$connectSuccess = false;
if (isset($_POST['submit'])) {
    $userConnection->mail = strip_tags($_POST['mail']);
    $users = $userConnection->getUser();
    $isOk = password_verify($_POST['password'], $userConnection->password);
    if ($isOk) {
        $userConnection->getUserProfile();
        $_SESSION['lastname'] = $userConnection->lastname;
        $_SESSION['firstname'] = $userConnection->firstname;
        $_SESSION['birthdate'] = $userConnection->birthdate;
        $_SESSION['userName'] = $userConnection->userName;
        $_SESSION['mail'] = $userConnection->mail;
        $_SESSION['id'] = $userConnection->id;
       $connectSuccess = true;
       header("Location: http://geektrip/profile.php");
    }
        }
?>