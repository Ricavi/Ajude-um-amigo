<?php
session_start();
require_once 'dbconnect.php';


if (isset($_POST['btn-editar-adocao'])) :
    $nome = mysqli_escape_string($connect, $_POST['alterarNomeBicho']);
    $descricao = mysqli_escape_string($connect, $_POST['alterarDescricao']);
    $diretorioDeletar = $_SESSION['diretorio'];
    $sqlBichoId = $_SESSION['id_bicho'];
    $nomeAntigo = $_SESSION['nome_bicho'];
    $idUser = $_SESSION['id_user'];

    if (!empty($nome)) :
        //verifica se foi colocado um novo nome
        $sql = "UPDATE `bichinho` SET `nome` = '$nome' WHERE `diretorio` = '$diretorioDeletar[0]' or `id`='$sqlBichoId[0]'";
        if (mysqli_query($connect, $sql)) :
        endif;

    else :
        //Nome não foi alterado
        echo "Nome vazio";
    endif;

    if (!empty($descricao)) :
    //verifica se foi colocado um novo nome
    $sql = "UPDATE `bichinho` SET `descricao` = '$descricao' WHERE `diretorio` = '$diretorioDeletar[0]' or `id`='$sqlBichoId[0]'";
    if (mysqli_query($connect, $sql)) :
    endif;

    else :
        //Nome não foi alterado
        echo "descrição vazio";
    endif;





    if ($_FILES['alterarImagemBicho']['size']!=0) :
        //verifica se o diretorio foi alterada
        if (unlink($diretorioDeletar[0])) :
            echo "DELETADO";
        else :
            echo "Não conseguimos";
        endif;
        //AQUI

        $formatosPermitidos = array("jpg", "jpeg", "jpg", "avif");
        if (!is_dir("imgBichos/$idUser")) :
            mkdir("imgBichos/$idUser");
        endif;

        $extensao = pathinfo($_FILES['alterarImagemBicho']['name'], PATHINFO_EXTENSION);
        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "imgBichos/";
            $pastaUsuario = "$idUser/";
            $temporario = $_FILES['alterarImagemBicho']['tmp_name'];



            if (!empty($nome)) :
                //verifica se foi colocado um novo nome
                $novoNome = "$sqlBichoId[0]" . $nome . ".$extensao";
            else :
                //Nome não foi alterado
                $novoNome = "$sqlBichoId[0]" . $nomeAntigo[0]  . ".$extensao";
            endif;


            if (move_uploaded_file($temporario, $pasta . $pastaUsuario . $novoNome)) :
                $mensagem = "Upload feito com sucesso";
            else :
                $mensagem = "Não consegui realizar o upload!";
            endif;
        else :
            $mensagem = "Formato inválido";
        endif;
        $diretorio = "imgBichos/$idUser/$novoNome";
        $sql = "UPDATE `bichinho` SET `diretorio` = '$diretorio' WHERE `diretorio` = '$diretorioDeletar[0]' or `id`='$sqlBichoId[0]'";
        if (mysqli_query($connect, $sql)) :
        endif;




    else :
    //descrição não foi alterado
    endif;

//limpando sessão
unset($_SESSION['nome_bicho']);
unset($_SESSION['id_bicho']);
unset($_SESSION['diretorio']);


endif;
