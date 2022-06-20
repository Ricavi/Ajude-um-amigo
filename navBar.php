<header id="header">
    <nav id="nav">
        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <ul id="menu" role="menu">
            <li><a href="./index">Inicio</a></li>
            <?php if (isset($_SESSION['logado']) == false) : ?>
                <li><a href="./login">Login</a></li>
                <li><a href="./cadastro">Cadastrar</a></li>
            <?php endif;
            ?>
            <li><a href="./amigos">Amigos</a></li>
            <li><a href="./contatos">Contato</a></li>
            <?php if (isset($_SESSION['logado']) == true) : ?>
                <li><a href="./adocoesCriadas">Minhas adoções</a></li>
                <li><a href="./logout">logout</a></li>
            <?php endif;
            ?>
        </ul>
    </nav>
    <div>
    <a href="./login"><i class="bi bi-person-circle tamanhoIcons"></i>Login/Cadastro</a>
    </div>
</header>