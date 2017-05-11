<?php

include "conexao.php";

$descricao_contrato = $_POST["descricao_contrato"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$cpf_profissional = $_POST["cpf_profissional"];
$id_aluguel = $_POST["id_aluguel"];

mysqli_query($conexao, "SELECT cpf_profissional FROM contrato_profissional WHERE cpf_profissional = '$cpf_profissional'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO contrato_profissional VALUES ('$descricao_contrato', '$data_inicio', '$data_fim', '$cpf_profissional', '$id_aluguel')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Contrato cadastrado com sucesso!";
	else
		echo "Erro no cadastro do Contrato";
}
else 
{
	$dt = mysqli_query($conexao, "SELECT data_fim FROM contrato_profissional WHERE data_fim => '$data_inicio'")
	if (mysqli_affected_rows($conexao) == 0)
	{
		mysqli_query($conexao, "INSERT INTO contrato_profissional VALUES ('$descricao_contrato', '$data_inicio', '$data_fim', '$cpf_profissional', '$id_aluguel')");
		if(mysqli_affected_rows($conexao) == 1)
		echo "Contrato cadastrado com sucesso!";
		else
		echo "Erro no cadastro do Contrato";
	}
	else
		echo "Existe um contrato vigente cadastrado para este profissional. Cadastre um contrato com data inicial posteior a $dt"
}

mysqli_close($conexao);
?>