<?php

session_start();


//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])) :

	$email = $_POST['emaillogin'];
	$senha = $_POST['senhalogin'];
	$url = "http://localhost/Ajude-um-amigo/TreadSingle.php?email=$email";
	//json_decode - Função que analisa a string codificada JSON e converte-a em uma variável do PHP.
	//file_get_contents -  Função que lê todo o conteúdo de um arquivo para uma String
	$resultado = json_decode(file_get_contents($url));



	if (empty($email) or empty($senha)) :
		$_SESSION['mensagem'] = "Os campos estão vazios";
		header('Location:login.php');
	else :



		/*
		Colocar os dados do JSON na variavel já existente.
		*/

		//$resultado = mysqli_query($connect, $sql);
		//fechando a conexão depois de armazenar os dados









		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (password_verify($senha, $resultado->senha)) :
			$_SESSION['logado'] = true;
			//MODIFICAR O DE BAIXO
			$_SESSION['id_user'] = $resultado->id;
			$_SESSION['mensagem'] = "Login realizado!";
			header('Location:index.php');

		else :
			$_SESSION['mensagem'] = "Senha Incorreta";
			header('Location:login.php');
		endif;


	endif;
endif;
