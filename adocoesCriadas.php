<?php require_once "head.php";
session_start();
require_once 'dbconnect.php';


if (isset($_SESSION['logado']) == true) :

else :
  header('Location:login');
endif;
?>
<title>Adoções criadas</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Adoções criadas</h1>
    <div class="container d-flex justify-content-around gap-3 tamanho">
      <div class="card" style="width: 18rem">
        <div class="card-body">
          <a href="criarAdocao.php">
            <button class="btn adicionar d-flex">
              <i class="bi bi-plus-lg plus"></i>
            </button>
          </a>
        </div>
      </div>
      <?php
      //Abrir a sessão
      $idUser = $_SESSION['id_user'];
      $sqlBicho = "SELECT id FROM bichinho WHERE fk_id='$idUser'";
      $dadosBicho = mysqli_fetch_array(mysqli_query($connect, $sqlBicho));
      $_SESSION['id_bicho'] = $dadosBicho;


      $sqlNome = "SELECT nome FROM bichinho WHERE fk_id='$idUser'";
      $dadosNome = mysqli_query($connect, $sqlNome);
      $ArrayNome=mysqli_fetch_row($dadosNome);
      //Fazer o indice
      //Fazer um botão para aumentar o indice até o count de cima


      $sqlDiretorio = "SELECT diretorio FROM bichinho WHERE fk_id='$idUser'";
      $dadosDiretorio = mysqli_fetch_array(mysqli_query($connect, $sqlDiretorio));

      $sqlDescricao = "SELECT descricao FROM bichinho WHERE fk_id='$idUser'";
      $dadosDescricao = mysqli_fetch_array(mysqli_query($connect, $sqlDescricao));


      //PARA NÃO APARECER O ERRO
      if (empty($dadosDescricao)) :
        $dadosDescricao[0] = ("Nenhuma Descrição encontrada");
      endif;
      if (empty($ArrayNome)) :
        $ArrayNome[0] = ("Nenhuma Nome encontrada");
      endif;
      if (empty($dadosDiretorio)) :
        $dadosDiretorio[0] = ("./img/no_image.jpg");
      endif;

      ?>


      <div class="card" style="width: 18rem">
        <img src="<?php
                  echo "$dadosDiretorio[0]";
                  ?>" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title centralizar tituloCard">
            <?php
            echo "$ArrayNome[0]";
            ?>
          </h5>
          <p class="card-text overflow text">
            <?php
            echo "$dadosDescricao[0]";
            ?>
          </p>
          <div class="d-flex justify-content-around">

            <a href="editarAdoacao.php">
              <button type="submit" name="btn-editar" class="btn btn-editar ">
                <i class="bi bi-pencil-fill tamanhoIcons"></i>
              </button>
            </a>


            <form action="deletar.php" method="POST">
              <button type="submit" name="btn-delete" class="btn btn-delete">
                <i class="bi bi-trash3-fill tamanhoIcons"></i>
              </button>
            </form>


          </div>
        </div>
      </div>




    </div>
  </section>

  <?php require_once "footer.php";    ?>