<?php
    session_destroy();
    session_start();

    $user = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $cSenha = $_POST['passwordConfirm'];

    //Validações
    if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        header('Location: registrar.php?invalidEmail&user='.$user);
        exit();
    }

    if (strcmp($senha,$cSenha) != 0){
        header('Location: registrar.php?invalidPassword&user='.$user.'&email='.$email);
        exit();
    }

    if(strlen($senha) < 8){
        header('Location: registrar.php?invalidPassword=0&user='.$user.'&email='.$email);
        exit();
    }

    //Salvar no banco de Dados
    $_SESSION['saveFakeDBUserName'] = $user;
    $_SESSION['saveFakeDBEmail'] = $email;
    $_SESSION['seveFakeDBPassword'] = $senha;

    //Redirecionar para o login
    header('Location: login.php');

?>