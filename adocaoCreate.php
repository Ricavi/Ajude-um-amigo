<?php
//Iniciar  Sessão
session_start();

require_once 'dbconnect.php';

if (isset($_POST['btn-criar-adocao'])) :
    $erros = array();


    if (isset($_SESSION['logado']) == true) :
        //BANCO DE DADOS
        $nome = mysqli_escape_string($connect, $_POST['nomeBicho']);
        $descricao = mysqli_escape_string($connect, $_POST['descricao']);



        // IMAGEM    
        //FOMARTOS PPERMITIDOS
        $formatosPermitidos = array("jpg", "jpeg", "jpg", "avif");
        //id do usuario
        $idUser = $_SESSION['id_user'];
        if (!is_dir("imgBichos/$idUser")) :
            mkdir("imgBichos/$idUser");
        endif;
        $extensao = pathinfo($_FILES['imagemBicho']['name'], PATHINFO_EXTENSION);
        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "imgBichos/";
            $pastaUsuario = "$idUser/";
            $temporario = $_FILES['imagemBicho']['tmp_name'];

            $sqlBicho = "INSERT INTO bichinho(nome, diretorio ,descricao, fk_id) VALUES ('$nome','X','$descricao','$idUser')";
            if (mysqli_query($connect, $sqlBicho)) :
            endif;

            $sqlBichoId="SELECT id FROM bichinho WHERE nome='$nome' and fk_id='$idUser'";
            $sqlBichoId=mysqli_fetch_array(mysqli_query($connect, $sqlBichoId));
            
            
            $novoNome = $sqlBichoId[0] . $nome . ".$extensao";

            if (move_uploaded_file($temporario, $pasta . $pastaUsuario . $novoNome)) :
                $mensagem = "Upload feito com sucesso";
            else :
                $mensagem = "Não consegui realizar o upload!";
            endif;
        else :
            $mensagem = "Formato inválido";
        endif;

        //Armazenar diretorio da imagem no Banco de dados

        $diretorio = "imgBichos/$idUser/$novoNome";

        //altera diretorio no banco de dados
        
        $sql = "UPDATE `bichinho` SET `diretorio` = '$diretorio' WHERE `bichinho`.`diretorio` = 'X'";
        if (mysqli_query($connect, $sql)) :
        endif;
        echo $mensagem;
    endif;
else :
    echo "Você precisa estar Logado";
endif;
