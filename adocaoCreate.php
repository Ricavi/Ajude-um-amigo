<?php
//Iniciar  Sessão
session_start();

require_once 'dbconnect.php';
//echo "conectado ao banco";

if (isset($_POST['btn-criar-adocao'])) :
    $erros = array();

    //BANCO DE DADOS
    $nome = mysqli_escape_string($connect, $_POST['nomeBicho']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    if (isset($_SESSION['logado']) == true) :
        echo "Usuario Logado";




        // IMAGEM    
        //FOMARTOS PPERMITIDOS

        $formatosPermitidos = array("jpg", "jpeg", "jpg", "avif");

        $extensao = pathinfo($_FILES['imagemBicho']['name'], PATHINFO_EXTENSION);
        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "imgBichos/";
            $temporario = $_FILES['imagemBicho']['tmp_name'];
            $novoNome = $nome . uniqid() . ".$extensao";

            if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                $mensagem = "Upload feito com sucesso";
            else :
                $mensagem = "Não consegui realizar o upload!";
            endif;
        else :
            $mensagem = "Formato inválido";
        endif;
        echo $mensagem;
    endif;
else :
    echo "Você precisa estar Logado";
endif;
