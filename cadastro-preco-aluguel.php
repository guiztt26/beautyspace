<?php

include "conexao.php";

$id_aluguel = $_POST["id_aluguel"];
$preco_aluguel = $_POST["preco_aluguel"];
$data_validade = $_POST["rg_funcionario"];

mysqli_query($conexao, "SELECT id_aluguel FROM preco_aluguel WHERE id_aluguel = '$id_aluguel'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO preco_aluguel VALUES ('$id_aluguel','$preco_aluguel','$data_validade')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Preço do aluguel cadastrado com sucesso!";
	else
		echo "Erro no cadastro do preço do aluguel";
}
else
{
	$dt = mysqli_query($conexao, "SELECT data_validade FROM preco_aluguel WHERE data_validade > $data_validade");
	if(mysqli_affected_rows($conexao) == 0)
	{
	mysqli_query($conexao, "INSERT INTO preco_aluguel VALUES ('$id_aluguel','$preco_aluguel','$data_validade')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Preço do aluguel cadastrado com sucesso!";
	else
		echo "Existe um preço cadastrado com data de validade posterior a tentativa de cadastro. Por favor, cadastre um preço para este aluguel com data superior à $dt";
	}
}

mysqli_close($conexao);
?>