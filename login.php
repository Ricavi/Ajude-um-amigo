<!DOCTYPE html>
<?php

//Conexão
//The require_once expression is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.
require_once 'dbconnect.php';

//iniciar a sessão
session_start();

//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])):
	//echo "Clicou";
	$erros = array();
	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	
	
	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		//criptografando a senha
		//$senha=md5($senha);
		//usuario: marta/senha:123456
		$sql= "SELECT id,login FROM usuarios WHERE login= '$login' AND senha='$senha'";
		
		$resultado = mysqli_query($connect,$sql);
		//fechando a conexão depois de armazenar os dados
		mysqli_close($connect);
		
		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0):
			$dados=mysqli_fetch_array($resultado);
			$_SESSION['logado']= true;
			$_SESSION['id_usuario']= $dados['id'];
			//comenado que redireciona para página 16home.php - deve criar essa página
			header('Location: 17home.php');		
		
		else:
			$erros[]="<li>Usuário e senha não conferem.</li>";
			
		endif;
		
	endif;	
endif;	
?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <?php require_once "navBar.php"; ?>
  <section class="fundo">
    <div>
      <h1 class="centralizar titulos">Login</h1>
      <div class="d-flex justify-content-center container distancia mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="d-flex gap-4 mt-2">
            <label for="">Email</label>
            <input type="text" class="input" />
          </div>
          <div class="d-flex gap-4 mt-2 btn-style">
            <label for="">Senha</label>
            <div>
              <input type="text" class="input" />
              <button type="submit" class="btn btn-ctt centralizar mt-5">Logar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php require_once "footer.php";    ?>