<?php

include "includes/conexao.php";

$tipo_servico = $_POST["tipo_servico"];
$preco_servico = $_POST["preco_servico"];
$data_validade = $_POST["rg_funcionario"];

$servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'"))
$id_servico = mysqli_fetch_assoc($servico)['id_servico'];

mysqli_query($conexao, "SELECT id_servico FROM preco_servico WHERE id_servico = '$id_servico'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO preco_servico (id_servico, preco_servico, data_validade) VALUES ('$id_servico','$preco_servico','$data_validade')");
	if($result1)
		echo "Preço do serviço cadastrado com sucesso!";
	else
		echo "Erro no cadastro do preço do serviço";
}
else
{
	$dt = mysqli_query($conexao, "SELECT data_validade FROM preco_servico WHERE data_validade > $data_validade");
	if(mysqli_affected_rows($conexao) == 0)
	{
		$result2 = mysqli_query($conexao, "INSERT INTO preco_servico (id_servico, preco_servico, data_validade) VALUES ('$id_servico','$preco_servico','$data_validade')");
		if($result2)
			echo "Preço do serviço cadastrado com sucesso!";
		else
			echo "Existe um preço cadastrado com data de validade posterior a tentativa de cadastro. Por favor, cadastre um preço para este serviço com data superior à $dt";
	}
}

mysqli_close($conexao);
?>