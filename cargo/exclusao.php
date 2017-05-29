<?php

// Inclui o arquivo de conexão com o banco de dados
include "../includes/conexao.php";

// Recebe a id do comentário a ser excluído
$id = $_GET['id'];

// Monta o comando SQL para excluir um comentário do banco
$query = "DELETE FROM cargo WHERE id_cargo = '$id'";

// Verifica se o comando foi executado corretamente
if (mysqli_query($conexao, $query)) {
	// Se sim, o comentário foi cadastrado e o usuário é redirecionado para o index.php
	header("location:index.php");
} else {
	// Se não, exibe o erro ocorrido no MySQL
	echo mysqli_error($conexao);
	exit;
}

?>