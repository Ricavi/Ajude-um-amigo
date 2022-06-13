<?php
session_start();
require_once "head.php";
$nomePagina = "Amigos";
require_once "titulo.php";
require_once 'dbconnect.php'; ?>


<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Amigos</h1>
    <div>
      <div class="VAIDARCERTO1 justify-content-center">
        <?php
        $sqlBicho = "SELECT * FROM bichinho";
        $bichos = mysqli_query($connect, $sqlBicho);


        ?>
        <?php while ($dados = mysqli_fetch_array($bichos)) { ?>
          <div class="BATATA1 d-flex justify-content-around gap-3">
            <div class="card " style="width: 18rem">
              <!-- 
          Imagem
        -->
              <img src="<?php echo $dados['diretorio']; ?>" class="card-img-top cardImg" alt="..." />
              <div class="card-body btn-style">
                <!-- 
          Nome do Animal
        -->
                <h5 class="card-title centralizarCard tituloCard">
                  <?php
                  echo $dados['nome'];
                  ?>
                </h5>
                <!-- 
          Descrição
        -->
                <p class="card-text overflow text">
                  <?php
                  echo $dados['descricao'];
                  ?>
                </p>
                <a href="chat"><button class="btn btn-am">Adotar</button></a>
              </div>
            </div>
          </div>
        <?php
        } ?>
      </div>
    </div>
  </section>
  <!--Footer Inicio-->
  <?php require_once "footer.php";    ?>