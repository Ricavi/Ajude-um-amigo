<?php

//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])):
	session_start();
	echo "<h1>Clicou</h1>";
	require_once 'dbconnect.php';
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['emaillogin']);
	$senha = mysqli_escape_string($connect, $_POST['senhalogin']);
	$senhaCripto=password_hash($senha,PASSWORD_BCRYPT);

	
	if(empty($login) or empty($senha)):
		echo "<h1> O campo login/senha precisa ser preenchido </h1>";
         
	else:
		//criptografando a senha
		//$senha=md5($senha);
		//usuario: marta/senha:123456
		$sql= "SELECT id,email FROM usuarios WHERE email= '$login' AND senha='$senhaCripto'";
		
		$resultado = mysqli_query($connect,$sql);
		//fechando a conexão depois de armazenar os dados
		mysqli_close($connect);

		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0):
			$dados=mysqli_fetch_array($resultado);
			$_SESSION['logado']= true;
			$_SESSION['id_usuario']= $dados['id'];
		
		else:
			echo "<h1>Usuário e senha não conferem.</h1>";
			
		endif;
		
	endif;	
endif;	
?>