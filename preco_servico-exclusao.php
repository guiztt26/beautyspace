<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

$id = $_GET['id'];

$query = "DELETE FROM preco_servico WHERE id_servico = '$id'";

if (mysqli_query($conexao, $query)) 
{

	header("location:http://beautyspace.hol.es/consulta-de-servicos/");
} 
else 
{
	echo mysqli_error($conexao);
	exit;
}

?>