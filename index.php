<?php
session_start();
require_once "head.php";
require_once 'dbconnect.php';
$nomePagina = "Home";
require_once "titulo.php";
//curdate() para verificar a data do bicho do dia
//verificar a data em um txt
?>

<body>
  <?php require_once "navBar.php";
  require_once "feedback.php";

  //Atualizar o "Amigo do dia"
  $sqlTempoBd = "SELECT * FROM `tempo`";
  $tempoBd = mysqli_fetch_array(mysqli_query($connect, $sqlTempoBd));
  $sqlTempoAtual = "SELECT Day(now())";
  $tempoAtual = mysqli_fetch_array(mysqli_query($connect, $sqlTempoAtual));
  if ($tempoBd[0] != $tempoAtual[0]) {
    $sqlAnimal = "SELECT * FROM bichinho ORDER BY RAND()";
    $dadosAnimal = mysqli_fetch_array(mysqli_query($connect, $sqlAnimal));
    $sql = "UPDATE `tempo` SET `data` = '$tempoAtual[0]'";
    mysqli_query($connect, $sql);
    $sql = "UPDATE `tempo` SET `idAnimal` = '$dadosAnimal[id]'";
    mysqli_query($connect, $sql);
  } else {
    $sqlTempo = "SELECT * FROM tempo";
    $dadosTempo = mysqli_fetch_array(mysqli_query($connect, $sqlTempo));
    $sqlAnimal = "SELECT * FROM bichinho WHERE id = '$dadosTempo[idAnimal]'";
    $dadosAnimal = mysqli_fetch_array(mysqli_query($connect, $sqlAnimal));
  }
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
              <img src="<?php echo $dadosAnimal['diretorio']; ?>" alt="" class="btnAddImg" />
              <div class="textTamanho btn-style ">
                <h1 class="centralizarCard subtitulo">
                  <?php
                  echo $dadosAnimal['nome'];
                  ?></h1>
                <p class="text">
                <?php
                  echo $dadosAnimal['descricao'];
                  ?>
                </p>
                <a href="chat"><button class="btn btn-am">Adotar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <article class="quemSomos container distancia" id="info">
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