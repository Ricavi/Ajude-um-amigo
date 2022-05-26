<?php


if (isset($_POST['btn-cadastrar'])) :
	$erros = array();

	if(filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)===false):
		$erros[]="Email inválido";
	endif;









	require_once 'dbconnect.php';
	//echo "conectado ao banco";
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	//$email = mysqli_escape_string($connect, $_POST['email']);

	$cpf = str_replace(array(".", "-"), "", $_POST['txtCPF']);
	$cpf = (mysqli_escape_string($connect, $cpf));

	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senhaCripto = password_hash($senha, PASSWORD_BCRYPT);

	$email = mysqli_escape_string($connect, $_POST['email']);
	$verificarEmail = mysqli_fetch_array(mysqli_query($connect, "SELECT EXISTS(SELECT email from usuario where email = '$email')"));

	$sql = "INSERT INTO usuario(nome, email, cpf, senha) VALUES ('$nome','$email',$cpf,'$senhaCripto')";
	//echo $sql;

	if ($verificarEmail[0] == 0) :
		if (mysqli_query($connect, $sql)) :
			echo "Cadastro com sucesso!";
		else :
			echo "Erro no Cadastro";
		endif;
	else :
		echo "Já existe um email";

	endif;

endif;
