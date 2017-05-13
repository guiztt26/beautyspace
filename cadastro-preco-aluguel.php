<?php

include "includes/conexao.php";

$tipo_aluguel = $_POST["tipo_aluguel"];
$preco_aluguel = $_POST["preco_aluguel"];
$data_validade = $_POST["rg_funcionario"];

$aluguel = mysqli_query($conexao, "SELECT id_aluguel FROM aluguel WHERE tipo_aluguel = '$tipo_aluguel'");
$id_aluguel = mysqli_fetch_assoc($aluguel)['id_aluguel'];

mysqli_query($conexao, "SELECT id_aluguel FROM preco_aluguel WHERE id_aluguel = '$id_aluguel'");
if(mysqli_affected_rows($conexao) == 1)
{
	$data = mysqli_query($conexao, "SELECT data_validade FROM preco_aluguel WHERE data_validade > '$data_validade'");
	if(mysqli_affected_rows($conexao) == 0)
	{
		$result1 = mysqli_query($conexao, "INSERT INTO preco_aluguel (id_aluguel, preco_aluguel, data_validade) VALUES ('$id_aluguel','$preco_aluguel','$data_validade')");
		if($result1)
			echo "Preço do aluguel cadastrado com sucesso!";
		else
			echo "Erro no cadastro do preço do aluguel";
	}
	else
	{
		$dt = mysqli_fetch_assoc($data);
		echo "Existe um preço cadastrado com data de validade posterior a tentativa de cadastro. Por favor, cadastre um preço para este aluguel com data superior à $dt";
	}
}
else
	echo "Não existe um aluguel cadastrado com este nome. Por favor, verifique se digitou o nome corretamente ou cadastre o aluguel desejado.";

mysqli_close($conexao);
?>