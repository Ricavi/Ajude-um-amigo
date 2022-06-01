<?php 
session_start();
require_once "head.php";
$nomePagina="Amigos";
require_once "titulo.php"; ?>


<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Amigos</h1>
    <div>
      <div class="container d-flex justify-content-around gap-3 tamanho">
        <div class="card" style="width: 18rem">
          <img src="./img/imagem_meta.png" class="card-img-top" alt="..." />
          <div class="card-body btn-style">
            <h5 class="card-title centralizarCard tituloCard">Charles</h5>
            <p class="card-text overflow text">
              Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
              de gato da foto, rs. Olha, eu preciso da sua ajuda para
              conseguir um lar! Isso é muito importante para mim, infelizmente
              fui abandonado e agora eu preciso encontrar novos donos. Que
              tal me ajudar nessa?
            </p>
            <a href="../Ajudeumamigo/chat"><button class="btn btn-am">Adotar</button></a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./img/imagem_meta.png" class="card-img-top" alt="..." />
          <div class="card-body btn-style">
            <h5 class="card-title centralizarCard tituloCard">Charles</h5>
            <p class="card-text overflow text">
              Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
              de gato da foto, rs. Olha, eu preciso da sua ajuda para
              conseguir um lar! Isso é muito importante para mim, infelizmente
              fui abandonado e agora eu preciso encontrar novos donos. Que
              tal me ajudar nessa?
            </p>
            <a href="../Ajudeumamigo/chat"><button class="btn btn-am">Adotar</button></a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./img/imagem_meta.png" class="card-img-top" alt="..." />
          <div class="card-body btn-style">
            <h5 class="card-title centralizarCard tituloCard">Charles</h5>
            <p class="card-text overflow text">
              Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
              de gato da foto, rs. Olha, eu preciso da sua ajuda para
              conseguir um lar! Isso é muito importante para mim, infelizmente
              fui abandonado e agora eu preciso encontrar novos donos. Que
              tal me ajudar nessa?
            </p>
            <a href="../Ajudeumamigo/chat"><button class="btn btn-am">Adotar</button></a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./img/imagem_meta.png" class="card-img-top" alt="..." />
          <div class="card-body btn-style">
            <h5 class="card-title centralizarCard tituloCard">Charles</h5>
            <p class="card-text overflow text">
              Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
              de gato da foto, rs. Olha, eu preciso da sua ajuda para
              conseguir um lar! Isso é muito importante para mim, infelizmente
              fui abandonado e agora eu preciso encontrar novos donos. Que
              tal me ajudar nessa?
            </p>
            <a href="../Ajudeumamigo/chat"><button class="btn btn-am">Adotar</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer Inicio-->
  <?php require_once "footer.php";    ?>