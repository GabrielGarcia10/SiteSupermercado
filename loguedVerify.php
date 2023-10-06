<?php
    //session_start();

    $Logued = validadeLogin();

    if(isset($_GET['logout'])){
        exitAccount();
    }

    function validadeLogin(){
        if(!isset($_SESSION["user_name"])){
            unset($_SESSION["user_name"]);
            unset($_SESSION["user_email"]);
            return false;
        }else{
            return true;
        }
    }

    function loginRequired(){
        if(!validadeLogin()){
            header("Location: login.php");
            exit();
        }
    }

    
    function exitAccount(){
        session_start();
        session_destroy();
        unset($_SESSION);
        header("Location: index.php");
        exit();
    }

?>