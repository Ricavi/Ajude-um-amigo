<?php

session_start();


//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btn-entrar'])) :
	$email = $_POST['emaillogin'];
	$senha = $_POST['senhalogin'];
	$url = "http://localhost/Ajudeumamigo/TreadSingle.php?email=$email";
	$resultado = json_decode(file_get_contents($url));

	if (empty($email) or empty($senha)) :
		$_SESSION['mensagem'] = "Os campos estão vazios";
		header('Location:login.php');
	else :
		if (password_verify($senha, $resultado->senha)) :
			$_SESSION['logado'] = true;
			$_SESSION['id_user'] = $resultado->id;
			$_SESSION['nome_user'] = $resultado->nome;
			$_SESSION['mensagem'] = "Login realizado!";

			header('Location:index.php');
		else :
			$_SESSION['mensagem'] = "Senha Incorreta";

			header('Location:login.php');
		endif;
	endif;
endif;
