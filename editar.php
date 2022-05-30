<?php
session_start();
require_once 'dbconnect.php';


if (isset($_POST['btn-editar-adocao'])) :
    $nome = mysqli_escape_string($connect, $_POST['alterarNomeBicho']);
    $descricao = mysqli_escape_string($connect, $_POST['alterarDescricao']);
    $diretorioDeletar = $_SESSION['diretorio'];


    if (isset($nome)) :
        //verifica se foi colocado um novo nome
        echo $nome;

    else :
    //Nome não foi alterado
    endif;

    if (isset($descricao)) :
        //verifica se foi colocado um novo nome
        

        //ATÉ AQUI

    else :
    //Nome não foi alterado
    endif;





    if (isset($_FILES)) :
        //verifica se a descrição foi alterada
        if (unlink($diretorioDeletar[0])) :
            echo "DELETADO";
        else :
            echo "Não conseguimos";
        endif;
        //AQUI

        $formatosPermitidos = array("jpg", "jpeg", "jpg", "avif");
        $idUser = $_SESSION['id_user'];
        if (!is_dir("imgBichos/$idUser")) :
            mkdir("imgBichos/$idUser");
        endif;
        $extensao = pathinfo($_FILES['alterarImagemBicho']['name'], PATHINFO_EXTENSION);
        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "imgBichos/";
            $pastaUsuario = "$idUser/";
            $temporario = $_FILES['alterarImagemBicho']['tmp_name'];
            $sqlBichoId = $_SESSION['id_bicho'];
            $novoNome = $sqlBichoId . $nome . ".$extensao";
            if (move_uploaded_file($temporario, $pasta . $pastaUsuario . $novoNome)) :
                $mensagem = "Upload feito com sucesso";
            else :
                $mensagem = "Não consegui realizar o upload!";
            endif;
        else :
            $mensagem = "Formato inválido";
        endif;
        $diretorio = "imgBichos/$idUser/$novoNome";
        $sql = "UPDATE `bichinho` SET `diretorio` = '$diretorio' WHERE `bichinho`.`diretorio` = '$diretorioDeletar[0]' or `bichinho`.`id`='$sqlBichoId'";
        if (mysqli_query($connect, $sql)) :
        endif;




    else :
    //descrição não foi alterado
    endif;





endif;
