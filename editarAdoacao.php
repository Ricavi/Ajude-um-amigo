<?php require_once "head.php"; ?>
<title>Editar adoção</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Editar adoção</h1>
    <div class="d-flex justify-content-around align-items-center container distancia">
      <div>
        <button class="btnEditImg mt-2"></button>
      </div>
      <div>
        <?php
//Abrir a sessão
session_start();

//Verificar se o fk_id de bichinhos é igual o da SESSION
$idUser=$_SESSION['id_user'];
//conexão com o banco de dados
//id do bichinho
//Armazenar o id do bicho na sessão
$sqlIdBicho="SELECT id FROM bichinho WHERE fk_id=$idUser"



//variaveis do banco de dados


?>
        <form action="">
          <div class="d-flex gap-2">
            <label for="">Nome</label>
            <input type="text" class="input" value="Charles" />
          </div>
          <div class="d-flex gap-2 mt-2">
            <label for="">Quantia</label>
            <input type="text" class="input" value="10000" />
          </div>
          <div class="d-flex mt-2 gap-2">
            <label for="">Descrição</label>
            <div class="btn-style">
              <textarea name="" id="" rows="4" class="input">
Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura de gato da foto, rs. Olha, eu preciso da sua ajuda para fazer uma cirurgia muito importante para mim! Infelizmente, eu quebrei a patinha enquanto atravessava a rua, e não tenho dinheiro suficiente para fazer a cirurgia e continuar brincando. Estou aqui pra pedir uma ajudinha de você, que tal me ajudar nessa?
              </textarea>
              <button class="btn btn-ctt centralizar mt-2 button">
                Editar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>