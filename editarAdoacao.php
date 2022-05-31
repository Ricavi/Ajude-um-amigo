<?php
session_start();
if (isset($_SESSION['logado']) == true) :
require_once "head.php";
require_once "head.php";
$nomePagina = "Editar adoção";
require_once "titulo.php"; ?>

<body>
  <?php require_once "navBar.php"; ?>






  <?php
  //Abrir a sessão
  require_once 'dbconnect.php';


  //Verificar se o fk_id de bichinhos é igual o da SESSION
  //conexão com o banco de dados
  //id do bichinho
  //Armazenar o id do bicho na sessão

  //variaveis do banco de dados

  $idUser = $_SESSION['id_user'];
  $sqlBicho = "SELECT id FROM bichinho WHERE fk_id='$idUser'";
  $dadosBicho = mysqli_fetch_array(mysqli_query($connect, $sqlBicho));
  $_SESSION['id_bicho'] = $dadosBicho;


  $sqlNome = "SELECT nome FROM bichinho WHERE fk_id='$idUser'";
  $dadosNome = mysqli_fetch_array(mysqli_query($connect, $sqlNome));
  $_SESSION['nome_bicho'] = $dadosNome;


  $sqlDiretorio = "SELECT diretorio FROM bichinho WHERE fk_id='$idUser'";
  $dadosDiretorio = mysqli_fetch_array(mysqli_query($connect, $sqlDiretorio));
  $_SESSION['diretorio'] = $dadosDiretorio;
  $sqlDescricao = "SELECT descricao FROM bichinho WHERE fk_id='$idUser'";
  $dadosDescricao = mysqli_fetch_array(mysqli_query($connect, $sqlDescricao));


  ?>






  <section class="fundo">
    <h1 class="titulo">Editar adoção</h1>
    <div class="d-flex justify-content-around align-items-center container distancia">
      <div>
        <img id="imagemPreview" class="btnAddImg mt-2" src="<?php
                                                            echo "$dadosDiretorio[0]";
                                                            ?>" alt="" onerror='this.style.display = "none"' onload='this.style.display = "block"'>
      </div>
      <div>



        <form action="editar.php" method="POST" enctype="multipart/form-data">
          <div class="d-flex gap-2">
            <label for="">Nome</label>
            <input placeholder="<?php echo "$dadosNome[0]"; ?>" name="alterarNomeBicho" id="alterarNomeBicho" type="text" class="input" />
          </div>
          <div class="btnvini d-flex gap-2 mt-2">
            <label for="alterarImagemBicho">Alterar imagem</label>
            <input name="alterarImagemBicho" id="alterarImagemBicho" onchange="preview()" type="file" src="" accept=".jpg, .jpeg, .pnp, .avif">
            <script>
              function preview() {
                imagemPreview.src = URL.createObjectURL(event.target.files[0])
                //DEPOIS COLOCAR NO SCRIPT
              }
            </script>
          </div>
          <div class="d-flex mt-2 gap-2">
            <label for="">Descrição</label>
            <div class="btn-style">
              <textarea placeholder="<?php echo "$dadosDescricao[0]"; ?>" name="alterarDescricao" id="alterarDescricao" rows="4" class="input"></textarea>
              <button type="submit" name="btn-editar-adocao" class="btn btn-ctt centralizar mt-2">Editar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    
  else :
    $_SESSION['mensagem'] = "Você precisa estar Logado!";
    header('Location:login');
  endif;
  ?>