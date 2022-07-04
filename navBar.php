<header id="header">
    <nav id="nav">
        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <ul id="menu" role="menu">
            <li><a href="./index">Inicio</a></li>
            <li><a href="./amigos">Amigos</a></li>
            <?php if (isset($_SESSION['logado'])) { ?>
                <li><a href="./adocoesCriadas">Minhas adoções</a></li>
            <?php }
            ?>
            <li><a href="./contatos">Contato</a></li>
            <?php if (isset($_SESSION['logado'])) { ?>
                <li><a href="./logout">logout</a></li>
            <?php }
            ?>
        </ul>
    </nav>
    <div class="loginDiv">
        <?php if (!(isset($_SESSION['logado']))) { ?>
            <a href="./login"><i class="bi bi-person-circle loginIcon"></i>
            <?php } else { ?>
                <a href="./adocoesCriadas"><i class="bi bi-person-circle loginIcon"></i>
                <?php } ?>
                <p class="logintxt">
                    <?php if (!(isset($_SESSION['logado']))) { ?>Login/Cadastro
                <?php } else {
                        echo strtok($_SESSION['nome_user'], " ");
                    } ?></p>
                </a>
    </div>
</header>