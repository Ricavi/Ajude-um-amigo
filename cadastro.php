<?php require_once "head.php"; ?>
<title>Cadastro</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <div>


      <h1 class="titulo">Cadastro</h1>
      <div class="d-flex justify-content-center container distancia mt-4 ms-5">
        <form action="crud_create.php" method="POST">


          <div class="d-flex gap-4">
            <label for="nome">Nome</label>
            <input type="text" class="input" name="nome" id="nome">
          </div>


          <div class="d-flex gap-4 mt-2">
            <label for="email">Email</label>
            <input type="email" class="input" name="email" id="email">
          </div>
          <div class="d-flex gap-4 mt-2 text-nowrap">
            <label for="cpf">CPF</label>
            <input type="text" class="input" name="cpf" id="cpf">
          </div>

          <div class="d-flex gap-4 mt-2 btn-style">
            <label for="password">Senha</label>
            <div>
              <input type="password" class="input" name="senha" id="senha">


              <button type="submit" name="btn-cadastrar" class="btn btn-ctt centralizar mt-5">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <?php require_once "footer.php";    ?>