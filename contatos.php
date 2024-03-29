<?php
session_start();
require_once "head.php";
require_once "head.php";
$nomePagina = "Fale conosco";
require_once "titulo.php"; ?>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo padraoTela">
    <h1 class="titulo">Fale conosco</h1>
    <div class="d-flex justify-content-around container justify-content-center mt-4">
      <div>
        <form class="d-flex flex-column" action="">
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
  </section>

  <?php require_once "footer.php";    ?>