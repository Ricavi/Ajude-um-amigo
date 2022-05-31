<?php 
session_start();

if (isset($_SESSION['logado']) == true) :
    require_once "head.php";
    $nomePagina = "Chat";
    require_once "titulo.php"; ?>


    <body>
        <header id="headerChat">
            <nav id="nav">
                <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                    <span id="hamburger"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="./index">Inicio</a></li>
                    <li><a href="./login">Login</a></li>
                    <li><a href="./cadastro">Cadastrar</a></li>
                    <li><a href="./amigos">Bichinhos</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="./contatos">Contato</a></li>
                    <li><a href="./logout">lOGOUT</a></li>
                </ul>
            </nav>
            <h1 class="titulo">Usuário</h1>
        </header>
        <div class="fundo">
            <div>
                <div class="corpoChat">
                </div>
            </div>
        </div>
    <?php require_once "footer.php";
else :
    $_SESSION['mensagem'] = "Você precisa estar Logado!";
    header('Location:login');
endif;
    ?>