<?php require_once "head.php"; ?>
<title>Cadastro</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo login">
    <div>


      <h1 class="loginTitulo">Cadastro</h1>
      <div class="d-flex justify-content-center container distancia mt-4 novo">
        <form action="crud_create.php" method="POST">
          <div class="d-flex">
            <label for="nome">Nome</label>
            <input type="text" class="input-group" name="nome" id="nome">
          </div>
          <div class="d-flex mt-2">
            <label for="email">Email</label>
            <input type="email" class="input-group" name="email" id="email">
          </div>
          <div class="d-flex mt-2 text-nowrap">
            <label for="cpf">CPF</label>
            <input type="text" class="input-group" name="cpf" id="cpf">
          </div>
          <div class="d-flex mt-2">
            <label for="password">Senha</label>
            <input type="password" class="input-group" name="senha" id="senha">
          </div>
          <div class="btn-style">
            <button type="submit" name="btn-cadastrar" class="btn btn-ctt centralizar mt-5">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </section>


  <?php require_once "footer.php";    ?>