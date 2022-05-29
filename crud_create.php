<?php
//Iniciar  Sessão
session_start();

require_once 'dbconnect.php';
//echo "conectado ao banco";

if (isset($_POST['btn-cadastrar'])) :
	$erros = array();

	if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) === false) :
		$erros[] = "Email inválido";
	endif;










	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$nome = trim($nome);

	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$nome = trim($senha);

	if ($nome != "" && $senha) :
		$senhaCripto = password_hash($senha, PASSWORD_BCRYPT);

		$cpf = str_replace(array(".", "-"), "", $_POST['txtCPF']);
		$cpf = (mysqli_escape_string($connect, $cpf));

		$email = mysqli_escape_string($connect, $_POST['email']);
		$verificarEmail = mysqli_fetch_array(mysqli_query($connect, "SELECT EXISTS(SELECT email from usuario where email = '$email')"));

		$sql = "INSERT INTO usuario(nome, email, cpf, senha) VALUES ('$nome','$email',$cpf,'$senhaCripto')";
		//echo $sql;
		if ($verificarEmail[0] == 0) :
			if (mysqli_query($connect, $sql)) :
				$_SESSION['mensagem'] = "Cadastrado com sucesso!";
				header('Location:login');
			else :
				$_SESSION['mensagem'] = "Erro no Cadastro";
				header('Location:cadastro');
			endif;
		else :
			$_SESSION['mensagem'] = "Já existe uma conta utilizando este email";
			header('Location:cadastro');
		endif;
	else :
		$_SESSION['mensagem'] = "Os campos não podem ser enviados vazios";
		header('Location:cadastro');
	endif;

endif;
