<?php
session_start();
require_once 'dbconnect.php';
if (isset($_POST['btn-deletar'])) :
    $idUser = $_SESSION['id_user'];
    $idBicho = $_SESSION['id_bicho'];
    $sqlDeletar = "DELETE FROM 'bichinho' WHERE fk_id='$idUser' and id=$idBicho";
   
    if(mysqli_query($connect,$sqlDeletar)):
    
    else:

    endif;

    echo "$sqlDeletar";
endif;
