<?php

//Conexão
//The require_once expression is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.
require_once 'dbconnect.php';

require_once "head.php";
?>
  <title>Login</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo login">
  <?php require_once "feedback.php"; ?>
    <div>
      <h1 class="titulo">Login</h1>
      <div class="d-flex justify-content-center container distancia mt-4">



        <form action="entrar.php" method="POST">
          <div class="d-flex gap-4 mt-2">
            <label for="">Email</label>
            <input type="emaillogin" class="input" name="emaillogin" id="email">
          </div>
          <div class="d-flex gap-4 mt-2 btn-style">
            <label for="">Senha</label>
            <div>
              <input type="password" class="input" name="senhalogin" id="senhalogin">
              <button type="submit" name="btn-entrar" class="btn btn-ctt centralizar mt-5">Logar</button>
            </div>
          </div>
        </form>



      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>