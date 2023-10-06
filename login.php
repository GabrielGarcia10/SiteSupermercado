<?php
require 'comum.php';
require 'loguedVerify.php';
if($Logued){
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php loadHeadLinks() ?>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/styleLogin.css">
  <title>Login - Supermercado</title>
</head>

<body style="overflow: hidden;">

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
            </li>-->
          </ul>
        </div>
      </div>
    </nav>
  </head>

  <main>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Entrar</h3>
                  </div>
                </div>
                <form action="validadeLogin.php" class="signin-form" method="POST">
                  <div class="form-group mt-3">
                    <input id="username" name="username" type="text" class="form-control <?php if(isset($_GET['invalid'])){ ?>border-danger<?php }?>" required>
                    <label class="form-control-placeholder" for="username">Usuário</label>
                  </div>
                  <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control <?php if(isset($_GET['invalid'])){ ?>border-danger<?php }?>" required>
                    <label class="form-control-placeholder" for="password">Senha</label>
                    <span id="toggle-password" toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password cursor-pointer"></span>
                    <?php if(isset($_GET['invalid'])){ ?>
                      <span style="color: red;">Usuário ou senha incorretos!</span>  
                    <?php }?>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label name="Remember-Me" class="checkbox-wrap checkbox-primary mb-0">Lembrar-me
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="w-50 text-md-right">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Esqueci a senha</a>
                    </div>
                  </div>
                </form>
                <p class="text-center"><a data-toggle="tab" href="registrar.php">Inscrever-se</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Esqueci a senha</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Caso tenha esquecido sua senha avise o administrador do sistema.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>




  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    let btn = document.getElementById('toggle-password');
    btn.addEventListener('click', function() {
      let input = document.getElementById('password');
      if (input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
      } else {
        input.setAttribute('type', 'password');
      }
    });
  </script>
</body>

</html>