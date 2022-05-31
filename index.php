<?php 
session_start();
require_once "head.php";
$nomePagina="Home";
require_once "titulo.php";
?>
<body>
<?php require_once "navBar.php";
  require_once "feedback.php";
  ?>
  <section class="gradient">
    <article>
      <div class="metaDia">
        <div>
          <div>
            <div class="risco">
              <div class="tituloMeta">
                <h1>Amigo do dia</h1>
              </div>
            </div>
            <div class="d-flex meta justify-content-around align-items-center distancia charles">
              <img src="./img/imagem_meta.png" alt="Gato" class="gato" />
              <div class="textTamanho btn-style ">
                <h1 class="centralizar subtitulo ">Charles</h1>
                <p class="text">
                  Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
                  de gato da foto, rs. Olha, eu preciso da sua ajuda para
                  conseguir um lar! Isso é muito importante para mim, infelizmente
                  fui abandonado e agora eu preciso encontrar novos donos. Que
                  tal me ajudar nessa?
                </p>
                <a href="chat"><button class="btn btn-am">Adotar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <article class="quemSomos container distancia" id="ancora">
    <div class="tituloQuemSomos">
      <h1>Quem somos</h1>
    </div>
    <div class="conteinerHorizontal charles align-itens-center">
      <section>
        <div class="textTamanho">
          <div class="sobreNos">
            <h1>Sobre nós</h1>
          </div>
          <div>
            <p class="altura text">
              Este é um projeto desenvolvido por dois alunos do IFES para a
              finalização do curso, além de melhorar a vida de animais
              abandonados.
            </p>
          </div>
          <img src="./img/icon_pessoas.png" alt="" />
        </div>
      </section>

      <section>
        <div class="textTamanho">
          <div class="sobreNos">
            <h1>Objetivo</h1>
          </div>
          <div>
            <p class="text">
              Muitas animais que são resgatados das ruas, ou até mesmo donos
              que não tem mais condições de mantê-los, precisam de novos
              lares para continuar suas vidas normalmente. Este site tem o
              objetivo de mostrar esses bichinhos para os seus novos donos.
            </p>
          </div>
          <img src="./img/icon_alvo.png" alt="" />
        </div>
      </section>
    </div>
  </article>
  <?php require_once "footer.php";    ?>