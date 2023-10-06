<?php
//session_start();
require 'comum.php';
require 'loguedVerify.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php loadHeadLinks() ?>
    <title>Pagina Inicial - Supermercado</title>
</head>

<body>

    <head>
        <!-- Nav Bar -->
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">  
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li> -->
                    </ul>

                    <!-- Login user -->
                    <div class="dropdown">
                        <?php
                        if ($Logued) {
                        ?>
                            <button class="btn btn-primary navButtonUserLogin" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                echo $_SESSION["user_name"];
                                ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="loguedVerify.php?logout">Sair</a></li>
                            </ul>
                        <?php
                        } else {
                        ?>
                            <a class="btn btn-primary navButtonUserLogin" type="button" aria-expanded="false" href="login.php">
                                Fazer Login
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </head>

    <?php
    if ($Logued) {
    ?>
        <h4>Usuário: <?php echo $_SESSION["user_name"] ?> </h4>
        <h4>Email: <?php echo $_SESSION["user_email"] ?> </h4>
    <?php
    }
    ?>


</body>

</html>