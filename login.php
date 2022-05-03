<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Login</title>
  </head>

  <body>
  
  <?php
  
  ?>



    <!-- itens quando o menu abre-->
    <nav class="fundo">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="backgroundMenu p-4">
          <h5 class="text-white h4"></h5>
          <span class="text-muted"></span>
        </div>
      </div>

      <div class="navbar navbar-light container">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
    
    <section class="fundo vw-auto">
      <div>
        <h1 class="text-align-center tituloMeta titulos">Login</h1>
        <div class="d-flex justify-content-around container distancia mt-4">
          <form action="">
            <div class="d-flex gap-4 mt-2">
              <label for="">Email</label>
              <input type="text" class="input" />
            </div>
            <div class="d-flex gap-4 mt-2 btn-style">
              <label for="">Senha</label>
              <div>
                <input type="text" class="input" />
                <button class="btn btn-ctt centralizar mt-5">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php require_once "footer.php";    ?>
