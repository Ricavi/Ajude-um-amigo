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
        echo "Deletado o diretorio";
    else :
        echo "erro ao deletar o diretorio";
    endif;


    if (mysqli_query($connect, $sqlDeletar)) :
        echo "Deletado do banco de dados";
    else :
        echo "Erro ao deletar o banco";
    endif;

endif;
