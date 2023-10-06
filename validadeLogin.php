<?php
session_start();

$user = $_POST['username'];
$senha = $_POST['password'];


if (strcmp($_POST['username'], $_SESSION['saveFakeDBUserName']) == 0 && strcmp($_POST['password'], $_SESSION['seveFakeDBPassword']) == 0) {
    $_SESSION["user_name"] =  $user;
    $_SESSION["user_email"] = $_SESSION['saveFakeDBEmail'];
    header("Location: index.php");
    exit();
}

header("Location: login.php?invalid");
exit();

?>