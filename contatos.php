<?php require_once "head.php"; ?>
<title>Fale conosco</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Fale conosco</h1>
    <div class="Centro">
      <div class="d-flex justify-content-around align-items-center container">
        <div>
          <img class="cachorroFone" src="./img/imagem_contato.png" alt="" />
        </div>
        <div>
          <form class="d-flex flex-column" action="">
            <div class="d-flex gap-2">
              <label for="">Nome</label>
              <input type="text" class="input" />
            </div>
            <div class="d-flex gap-2 mt-2">
              <label for="">Email</label>
              <input type="text" class="input" />
            </div>
            <div class="d-flex gap-2 mt-2">
              <label for="">Assunto</label>
              <input type="text" class="input" />
            </div>
            <div class="d-flex mt-2 gap-2">
              <label for="">Mensagem</label>
              <div class="btn-style">
                <textarea name="" id="" rows="4" class="input"></textarea>
                <button class="btn btn-ctt centralizar mt-2">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>