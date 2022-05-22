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
      <div class="card" style="width: 18rem">
        <img src="./img/imagem_meta.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title centralizar tituloCard">Charles</h5>
          <p class="card-text overflow text">
            Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura de gato
            da foto, rs. Olha, eu preciso da sua ajuda para fazer uma cirurgia
            muito importante para mim! Infelizmente, eu quebrei a patinha
            enquanto atravessava a rua, e não tenho dinheiro suficiente para
            fazer a cirurgia e continuar brincando. Estou aqui pra pedir uma
            ajudinha de você, que tal me ajudar nessa?
          </p>
          <div class="d-flex justify-content-around">
            <button class="btn">
              <i class="bi bi-pencil-fill tamanhoIcons"></i>
            </button>
            <button class="btn">
              <i class="bi bi-trash3-fill tamanhoIcons"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>