<?php

session_start();

require_once 'dbconnect.php';

//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])) :




	$erros = array();
	$email = mysqli_escape_string($connect, $_POST['emaillogin']);
	$senha = mysqli_escape_string($connect, $_POST['senhalogin']);

	if (empty($email) or empty($senha)) :
		$_SESSION['mensagem'] = "Os campos estão vazios";
		header('Location:login.php');
	else :


		$sql = "SELECT senha from usuario where email='$email'";

		$resultado = mysqli_query($connect, $sql);
		$dadosSenha = mysqli_fetch_array($resultado);
		//fechando a conexão depois de armazenar os dados


		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0) :
			if (password_verify($senha, $dadosSenha[0])) :
				$sqlUser = "SELECT id FROM usuario WHERE email='$email'";
				$resultadoUser = mysqli_query($connect, $sqlUser);
				$dadosUser = mysqli_fetch_array(($resultadoUser));
				if (mysqli_num_rows($resultadoUser) > 0) :
					$_SESSION['logado'] = true;
					$_SESSION['id_user'] = $dadosUser['id'];
					$_SESSION['mensagem'] = "Login realizado!";
					header('Location:index.php');
					mysqli_close($connect);
				endif;











			else :
				$_SESSION['mensagem'] = "Senha Incorreta";
				header('Location:login.php');
			endif;
		else :
			$_SESSION['mensagem'] = "Usuario não Cadastrado";

			echo $sql;
			header('Location:cadastro.php');


		endif;
	endif;


endif;
