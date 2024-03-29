<?php
session_start();
require_once "head.php";
$nomePagina="Cadastro";
require_once "titulo.php"; ?>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo padraoTela">
  <?php require_once "feedback.php"; ?>
    <h1 class="loginTitulo">Cadastro</h1>
    <div class="d-flex justify-content-center container distancia mt-4 formresponsivo">
      
    <form action="crud_create.php" method="POST">
        <div class="d-flex">
          <label for="nome">Nome</label>
          <input type="text" class="input-group" name="nome" id="nome" required>
        </div>
        <div class="d-flex mt-2">
          <label for="email">Email</label>
          <input type="email" class="input-group" name="email" id="email" required>
        </div>
        <div class="d-flex mt-2 text-nowrap">
          <label for="cpf">CPF</label>
          <input type="text" class="input-group" minlength="11" maxlength="11" name="txtCPF" id="txtCPF" autofocus="" title="Informe os onze dígitos do número do CPF." required>
        </div>
        <div class="d-flex mt-2">
          <label for="password">Senha</label>
          <input type="password" class="input-group" name="senha" id="senha" minlength="8" required>
        </div>
        <div class="btn-style">
        <div class="linkCadastro"><a href="./login">Fazer login</a></div>
          <button type="submit" name="btn-cadastrar" class="btn btn-ctt centralizar mt-5" id="toastbtn">Cadastrar</button>
        </div>
      </form>
    </div>
    </div>
  </section>


  <?php require_once "footer.php";    ?>