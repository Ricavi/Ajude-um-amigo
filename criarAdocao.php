<?php require_once "head.php"; ?>
<title>Criar adoção</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Criar adoção</h1>
    <div class="d-flex justify-content-around align-items-center container distancia">




      <div>
        
        <button type="file" class="btnAddImg mt-2">Adicionar imagem</button>
      
      
      </div>
      <div>
        <form action="" method="POST" enctype="multipart/form-data">
          
        
        <div class="d-flex gap-2">
            <label for="">Nome</label>
            <input type="text" class="input" />
          </div>
        


          <div class="btnvini d-flex gap-2 mt-2">
          <label for="imagemBicho">Adicionar imagem</label>
          <input type="file" id="imagemBicho" name="imagemBicho" src="" alt="">

          </div>
          
          
          <div class="d-flex mt-2 gap-2">
            <label for="">Descrição</label>
            
            
            <div class="btn-style">
              <textarea name="" id="" rows="4" class="input"></textarea>
              <button type="submit" name="btn-criar-adocao" class="btn btn-ctt centralizar mt-2">Criar</button>
            </div>
          </div>
        </form>
      </div>
    </div>



  </section>

  <?php require_once "footer.php";    ?>