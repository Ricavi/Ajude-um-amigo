<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Criar meta</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="text-align-center tituloMeta titulos">Criar meta</h1>
    <div class="d-flex justify-content-around align-items-center container distancia">
      <div>
        <button class="btnAddImg mt-2">Adicionar imagem</button>
      </div>
      <div>
        <form action="">
          <div class="d-flex gap-2">
            <label for="">Nome</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex gap-2 mt-2">
            <label for="">Quantia</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex mt-2 gap-2">
            <label for="">Descrição</label>
            <div class="btn-style">
              <textarea name="" id="" rows="4" class="input"></textarea>
              <button class="btn btn-ctt centralizar mt-2">Criar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>