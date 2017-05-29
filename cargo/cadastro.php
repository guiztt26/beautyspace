<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome_cargo'])) 
{
	include "../includes/conexao.php";

	$nome_cargo 	= $_POST['nome_cargo'];
	$descricao 	= $_POST['descricao'];

	$query = "INSERT INTO cargo (nome_cargo, descricao) VALUES ('$nome_cargo', '$descricao')";	
	if (mysqli_query($conexao, $query))
	{
		header("location:index.php");
	}
	else 
	{
		$erro = "Erro: " . mysqli_error($conexao);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Novo cargo</h1>
	<form action="cadastro.php" method="post">
		<label for="nome_cargo">Nome</label>
		<input type="text" name="nome_cargo" id="nome_cargo">
		<br>
		<label for="descricao">Descrição</label>
		<textarea name="descricao" id="descricao" rows="5" cols="50"></textarea>
		<button>Salvar</button>
	</form>
			
</body>
</html>