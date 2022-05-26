<?php


if (isset($_POST['btn-cadastrar'])) :


	require_once 'dbconnect.php';
	//echo "conectado ao banco";
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$cpf=str_replace(array(".","-"),"",$_POST['txtCPF']);
	$cpf = (mysqli_escape_string($connect,$cpf));
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senhaCripto = password_hash($senha, PASSWORD_BCRYPT);
	$sql = "INSERT INTO usuario(nome, email, cpf, senha) VALUES ('$nome','$email',$cpf,'$senhaCripto')";
	$verificarEmail = "SELECT EXISTS(SELECT email 
	from usuario 
	where email = '$email')";

	//echo $sql;
	if ($verificarEmail == 1) :
		echo "Já existe um email";

	else :
		if (mysqli_query($connect, $sql)) :
			echo "Cadastro com sucesso!";
		else :
			echo "Erro no Cadastro";
		endif;

	endif;

endif;
