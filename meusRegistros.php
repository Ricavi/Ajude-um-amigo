<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <title>Minhas metas</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="text-align-center tituloMeta titulos">Minhas metas</h1>
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
          <h5 class="card-title centralizar">Charles</h5>
          <p class="card-text overflow">
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