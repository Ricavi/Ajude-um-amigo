<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="gradient">
    <article>
      <div class="metaDia">
        <div>
          <div>
            <div class="risco">
              <div class="tituloMeta">
                <h1>Meta do dia</h1>
              </div>
            </div>
            <div class="d-flex meta justify-content-around align-items-center distancia link">
              <img src="./img/imagem_meta.png" alt="Gato" class="gato" />
              <div class="textTamanho btn-style link">
                <h1 class="centralizar titulos">Charles</h1>
                <p class="text">
                  Olá pessoal, tudo bem? Meu nome é Charles, sou essa fofura
                  de gato da foto, rs. Olha, eu preciso da sua ajuda para
                  conseguir um lar! Isso é muito importante para mim, infelizmente
                  fui abandonado e agora eu preciso encontrar novos donos. Que
                  tal me ajudar nessa?
                </p>

                <a href=""><button class="btn btn-am">Vizualizar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <article class="quemSomos container distancia">
    <div class="tituloQuemSomos">
      <h1>Quem somos</h1>
    </div>
    <div class="conteinerHorizontal">
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
