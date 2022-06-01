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
    <section class="fundo padraoTela">
      <h1 class="titulo">Adoções criadas</h1>
      <div class="container d-flex justify-content-around gap-3 tamanho">
        <div class="card" style="width: 18rem">
          <div class="card-body centralizar d-flex">
            <a href="criarAdocao.php">
              <button class="btn">
                <i class="bi bi-plus-lg plus"></i>
              </button>
            </a>
          </div>
          </a>
        </div>
        <?php
        $idUser = $_SESSION['id_user'];
        $sqlBicho = "SELECT * FROM bichinho WHERE fk_id='$idUser'";
        $dadosBicho = mysqli_fetch_array(mysqli_query($connect, $sqlBicho));
        $_SESSION['id_bicho'] = $dadosBicho;


        $sqlNome = "SELECT nome FROM bichinho WHERE fk_id='$idUser'";
        $dadosNome = mysqli_query($connect, $sqlNome);
        $arrayNome = mysqli_fetch_row($dadosNome);
        //Fazer o indice
        //Fazer um botão para aumentar o indice até o count de cima


        $sqlDiretorio = "SELECT diretorio FROM bichinho WHERE fk_id='$idUser'";
        $dadosDiretorio = mysqli_fetch_array(mysqli_query($connect, $sqlDiretorio));

        $sqlDescricao = "SELECT descricao FROM bichinho WHERE fk_id='$idUser'";
        $dadosDescricao = mysqli_fetch_array(mysqli_query($connect, $sqlDescricao));

        $bichos = mysqli_query($connect, $sqlBicho);

        //PARA NÃO APARECER O ERRO
        if (empty($dadosDescricao)) :
          $dadosDescricao[0] = ("Nenhuma descrição encontrada");
        endif;
        if (empty($arrayNome)) :
          $arrayNome[0] = ("Nenhuma nome encontrado");
        endif;
        if (empty($dadosDiretorio)) :
          $dadosDiretorio[0] = ("./img/no_image.jpg");
        endif;

        ?>
      
        <?php while ($dados=mysqli_fetch_array($bichos)) { ?>
          <div class="card" style="width: 18rem">
            <img src="<?php echo $dados['diretorio'];?>" class="card-img-top" alt="..." />
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

                <a href="editarAdoacao.php">
                  <button name="btn-editar" class="btn btn-editar ">
                    <i class="bi bi-pencil-fill tamanhoIcons"></i>
                  </button>
                </a>


                <form action="deletar.php" method="POST">
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
    </section>
  <?php require_once "footer.php";
else :
  $_SESSION['mensagem'] = "Você precisa estar Logado!";
  header('Location:login');
endif;
  ?>