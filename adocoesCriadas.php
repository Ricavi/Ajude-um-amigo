<?php require_once "head.php"; ?>
<title>Adoções criadas</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Adoções criadas</h1>
    <div class="container d-flex justify-content-around gap-3 tamanho">
      <div class="card" style="width: 18rem">
        <div class="card-body">
          <button class="btn adicionar d-flex">
            <i class="bi bi-plus-lg plus"></i>
          </button>
        </div>
      </div>
      <?php
      //Abrir a sessão
      require_once 'dbconnect.php';
      session_start();
      $idUser = $_SESSION['id_user'];
      $sqlBicho = "SELECT id FROM bichinho WHERE fk_id='$idUser'";
      $dadosBicho = mysqli_fetch_array(mysqli_query($connect, $sqlBicho));
      $_SESSION['id_bicho']=$sqlBicho;


      $sqlNome = "SELECT nome FROM bichinho WHERE fk_id='$idUser'";
      $dadosNome = mysqli_fetch_array(mysqli_query($connect, $sqlNome));



      $sqlDiretorio = "SELECT diretorio FROM bichinho WHERE fk_id='$idUser'";
      $dadosDiretorio = mysqli_fetch_array(mysqli_query($connect, $sqlDiretorio));

      $sqlDescricao = "SELECT descricao FROM bichinho WHERE fk_id='$idUser'";
      $dadosDescricao = mysqli_fetch_array(mysqli_query($connect, $sqlDescricao));


  //CRIAR UM IF PARA VERIFICAR SE EXISTE ESSAS COISAS AI DE CIMA
  //PARA NÃO APARECER O ERRO

      ?>


      <div class="card" style="width: 18rem">
        <img src="<?php
                  echo "$dadosDiretorio[0]";
                  ?>" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title centralizar tituloCard">
            <?php
            echo "$dadosNome[0]";
            ?>
          </h5>
          <p class="card-text overflow text">
            <?php
            echo "$dadosDescricao[0]";
            ?>
          </p>
          <div class="d-flex justify-content-around">


            <form action="editar.php" method="POST"></form>
            <button type="submit" name="btn-editar" class="btn btn-editar ">
              <i class="bi bi-pencil-fill tamanhoIcons"></i>
            </button>



            <form action="deletar.php" method="POST" >
              <button type="submit"  name="btn-delete" class="btn btn-delete">
                <i class="bi bi-trash3-fill tamanhoIcons"></i>
              </button>
            </form>


          </div>
        </div>
      </div>




    </div>
  </section>

  <?php require_once "footer.php";    ?>