<?php
session_start();
require_once 'dbconnect.php';
if (isset($_POST['btn-delete'])) :
    $idUser = $_SESSION['id_user'];
    $idBicho = $_SESSION['id_bicho'];
    $sqlDeletar = "DELETE FROM bichinho WHERE id='$idBicho[0]'";
print_r($idBicho[0]);
    $sqlDiretorio = "SELECT diretorio FROM bichinho WHERE id='$idBicho[0]'";
    $dadosDiretorio = mysqli_fetch_array(mysqli_query($connect, $sqlDiretorio));
    //Deletar diretorio

    if (unlink("$dadosDiretorio[0]")) :
        $_SESSION['mensagem'] = "Diretorio deletado";
		header('Location:adocoesCriadas');
    endif;


    if (mysqli_query($connect, $sqlDeletar)) :
        $_SESSION['mensagem'] = "Adoção deletada";
		header('Location:adocoesCriadas');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar";
		header('Location:adocoesCriadas');
    endif;

endif;
