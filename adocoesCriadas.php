<?php
session_start();
require_once "head.php";
require_once 'dbconnect.php';


if (isset($_SESSION['logado']) == true) :
  $nomePagina = "Adoções criadas";
  require_once "titulo.php"; ?>

  <body>
    <?php require_once "navBar.php";
    require_once "feedback.php";
    ?>
    <section class="fundo">
      <h1 class="titulo">Adoções criadas</h1>
      <!--
        Criar uma DIv externa como Coluna?
      -->
      <div class="viniCard container d-flex justify-content-around gap-3 ">
        <div class="card cartaoADD">
          <div class=" d-flex">
            <a href="./criarAdocao" class="centralizar">
              <button class="btn">
                <i class="bi bi-plus-lg plus"></i>
              </button>
            </a>
          </div>

        </div>

        <?php
        $idUser = $_SESSION['id_user'];

        if ($idUser == 1) {
          $sqlBicho = "SELECT * FROM bichinho";
          $bichos = mysqli_query($connect, $sqlBicho);
        } else {

          $sqlBicho = "SELECT * FROM bichinho WHERE fk_id='$idUser'";
          $dadosBicho = mysqli_fetch_array(mysqli_query($connect, $sqlBicho));
          $_SESSION['id_bicho'] = $dadosBicho;

          //Fazer o indice
          //Fazer um botão para aumentar o indice até o count de cima

          $bichos = mysqli_query($connect, $sqlBicho);
        }

        ?>
        <div class="VAIDARCERTO container">
          <?php while ($dados = mysqli_fetch_array($bichos)) { ?>
            <div class="card BATATA" style="width: 18rem">
              <img src="<?php echo $dados['diretorio']; ?>" class="card-img-top cardImg" alt="..." />
              <div class="card-body">
                <h5 class="card-title centralizarCard tituloCard">
                  <?php
                  echo $dados['nome'];
                  ?>
                </h5>
                <p class="card-text overflow text">
                  <?php
                  echo $dados['descricao'];
                  ?>
                </p>
                <div class="d-flex justify-content-around">
                  <form action="editarAdoacao.php" method="POST">


                    <button name="btn-editar" class="btn btn-editar ">
                      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                      <i class="bi bi-pencil-fill tamanhoIcons"></i>
                    </button>
                  </form>


                  <form action="deletar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <button name="btn-delete" class="btn btn-delete">
                      <i class="bi bi-trash3-fill tamanhoIcons"></i>
                    </button>
                  </form>


                </div>
              </div>
            </div>

          <?php
          } ?>


        </div>
      </div>
    </section>
  <?php require_once "footer.php";
else :
  $_SESSION['mensagem'] = "Você precisa estar Logado!";
  header('Location:login');
endif;
  ?>