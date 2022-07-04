<?php
//headers - comando que especifica características da resposta do cabeçalho HTTP.

//Domínios autorizados a acessar os recursos do servidor
header('Access-Control-Allow-Origin: *');

//Indica que o formato do corpo da solicitação é JSON
header('Content-Type: application/json');

//incializa banco de dados e método POST
include_once('Tinicializacao.php'); 

//Instanciando objeto
$post = new Post($db);

//Verifica se existe o id passado por parâmetro
$post-> email = isset($_GET['email']) ? $_GET['email'] : die();
$post -> read_single();

//monta o array que será retornado.
$post_arr= array(
	'senha' => $post->senha,
	'id' => $post->id,
	'nome' => $post->nome
);

//imprime o JSON
print_r(json_encode($post_arr));


?>