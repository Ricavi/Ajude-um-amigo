<?php
require_once 'dbconnect.php';


if (isset($_SESSION['logado']) == true) :
    $sql = "SELECT nome from usuario where id='$_SESSION[id_user]'";
    $resultado = mysqli_fetch_array(mysqli_query($connect, $sql)); ?>
    <title><?php echo $nomePagina ." - ". $resultado[0]; ?></title>
<?php else : ?>
    <title><?php echo $nomePagina; ?></title>
<?php endif; ?>
</head>