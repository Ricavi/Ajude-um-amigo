<?php
session_start();
//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])) :


	echo "<h1>Clicou</h1>";
	require_once 'dbconnect.php';

	$erros = array();
	$email = mysqli_escape_string($connect, $_POST['emaillogin']);
	$senha = mysqli_escape_string($connect, $_POST['senhalogin']);

	if (empty($email) or empty($senha)) :
		echo "vazio!";
	else :


		$sql = "SELECT senha from usuario where email='$email'";

		$resultado = mysqli_query($connect, $sql);
		$dadosSenha = mysqli_fetch_array($resultado);
		//fechando a conexão depois de armazenar os dados
		

		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0) :
			if (password_verify($senha, $dadosSenha[0])) :
				$sqlUser="SELECT id FROM usuario WHERE email='$email'";
				$resultadoUser=mysqli_query($connect,$sqlUser);
				$dadosUser=mysqli_fetch_array(($resultadoUser));
				if (mysqli_num_rows($resultadoUser) > 0) :
					$_SESSION['logado'] = true;
					$_SESSION['id_user']=$dadsoUser['id'];
					header('Location:index.php');
					mysqli_close($connect);
				endif;











			else :
				header('Location:login.php');
				$erros='Senha Incorreta';
			endif;
		else :
			echo $sql;


		endif;
	endif;


endif;
