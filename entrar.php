<?php

session_start();

include_once 'dbconnect.php';

//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])) :



	$url="http://localhost/Ajude-um-amigo/TreadSingle.php?id=$id";
			//json_decode - Função que analisa a string codificada JSON e converte-a em uma variável do PHP.
			//file_get_contents -  Função que lê todo o conteúdo de um arquivo para uma String
			$resultado = json_decode(file_get_contents($url));
			echo "senha: " . $resultado->senha . "<br>";
			echo "email: " . $resultado->email . "<br>";
		
			

	$erros = array();
	$email = $_POST['emaillogin'];
	$senha = $_POST['senhalogin'];

	if (empty($email) or empty($senha)) :
		$_SESSION['mensagem'] = "Os campos estão vazios";
		header('Location:login.php');
	else :


		$sql = "SELECT senha from usuario where email='$email'";




		/*
		Colocar os dados do JSON na variavel já existente.
		*/

		//$resultado = mysqli_query($connect, $sql);
		//fechando a conexão depois de armazenar os dados









		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0) :
			if (password_verify($senha, $resultado->email)) :
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
