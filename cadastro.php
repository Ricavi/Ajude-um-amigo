<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <title>Cadastro</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <div>
      <h1 class="centralizar titulos">Cadastro</h1>
      <div class="d-flex justify-content-center container distancia mt-4 ms-5">
        <form action="">
          <div class="d-flex gap-4">
            <label for="">Nome</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex gap-4 mt-2">
            <label for="">Email</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex gap-4 mt-2 text-nowrap">
            <label for="">CPF</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex gap-4 mt-2 btn-style">
            <label for="">Senha</label>
            <div>
              <input type="text" class="input" />
              <button type="submit" class="btn btn-ctt centralizar mt-5">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <?php require_once "footer.php";    ?>