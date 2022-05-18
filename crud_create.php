<?php


if (isset($_POST['btn-cadastrar'])) :


	require_once 'dbconnect.php';
	//echo "conectado ao banco";
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);

	$cpf = (mysqli_escape_string($connect, $_POST['cpf']));



	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senhaCripto=password_hash($senha,PASSWORD_BCRYPT);
	$sql = "INSERT INTO usuario(nome, email, cpf, senha) VALUES ('$nome','$email',$cpf,'$senhaCripto')";
	//echo $sql;
	if (mysqli_query($connect, $sql)) :
		echo "Cadastro com sucesso!";
	else :
		echo "Erro no Cadastro";
	endif;


endif;
