<?php require_once "head.php"; 
session_start();
if (isset($_SESSION['logado']) == true) :

else:
  header('Location:login');
endif;
?>
<title>Criar adoção</title>
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <h1 class="titulo">Criar adoção</h1>
    <div class="d-flex justify-content-around align-items-center container distancia">




      <div>
      <img id="imagemPreview" class="btnAddImg mt-2" src="" alt="" onerror='this.style.display = "none"' onload='this.style.display = "block"'>


      </div>
      <div>


        <form action="adocaoCreate.php" method="POST" enctype="multipart/form-data">


          <div class="d-flex gap-2">
            <label for="">Nome</label>
           
            <input name="nomeBicho"id="nomeBicho" type="text" class="input" minlength="3" required />
         
          </div>



          <div class="btnvini d-flex gap-2 mt-2">
            <label for="imagemBicho">Adicionar imagem</label>
            
            <input name="imagemBicho" id="imagemBicho" onchange="preview()" type="file" src="" accept=".jpg, .jpeg, .pnp, .avif" required>
           
           <script>
              function preview(){
                imagemPreview.src=URL.createObjectURL(event.target.files[0])
                //DEPOIS COLOCAR NO SCRIPT
              }
            </script>

          </div>


          <div class="d-flex mt-2 gap-2">
            <label for="">Descrição</label>

            <div class="btn-style">
            
            
            
            <textarea name="descricao" id="descricao" rows="4" class="input" required></textarea>
              <button type="submit" name="btn-criar-adocao" class="btn btn-ctt centralizar mt-2">Criar</button>
            
            
            
            
            
            
            </div>
          </div>
        </form>
      </div>
    </div>



  </section>

  <?php require_once "footer.php";    ?>