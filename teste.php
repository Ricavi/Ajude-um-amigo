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

	else:
		
			
			$sql = "SELECT senha from usuario where email='$email' and senha=$senha";


			$resultado = mysqli_query($connect,$sql);
			//fechando a conexão depois de armazenar os dados
			mysqli_close($connect);
			
			//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
			if (mysqli_num_rows($resultado) > 0):
				
				echo 'Password OK!';
			else:
				echo $sql;
				

			endif;
	endif;


endif;
?>