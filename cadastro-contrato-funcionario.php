<?php

include "includes/conexao.php";

$descricao_contrato = $_POST["descricao_contrato"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$cpf_funcionario = $_POST["cpf_funcionario"];
$nome_cargo = $_POST["nome_cargo"];

$cargo = mysqli_query($conexao, "SELECT id_cargo FROM cargo WHERE nome_cargo = '$nome_cargo'");
$id_cargo = mysqli_fetch_assoc($cargo)['id_cargo'];

mysqli_query($conexao, "SELECT cpf_funcionario FROM contrato_funcionario WHERE cpf_funcionario = '$cpf_funcionario'");
if(mysqli_affected_rows($conexao) == 1)
{
	$dt = mysqli_query($conexao, "SELECT data_fim FROM contrato_funcionario WHERE data_fim => '$data_inicio'")
	if (mysqli_affected_rows($conexao) == 1)
	{
		mysqli_query($conexao, "INSERT INTO contrato_funcionario (cpf_funcionario, id_cargo, descricao, data_inicio, data_fim) VALUES ('$cpf_funcionario', '$id_cargo', '$descricao_contrato', '$data_inicio', '$data_fim')");
		if(mysqli_affected_rows($conexao) == 1)
			echo "Contrato cadastrado com sucesso!";
		else
			echo "Existe um contrato vigente cadastrado para este funcionário. Cadastre um contrato com data inicial posteior a $dt";
	}
	else
		echo "Erro no cadastro do Contrato";
}
else
	echo "Este funcionário ainda não está cadastrado. Por favor, verifique se CPF digitado está correto ou cadastre o funcionário.";

mysqli_close($conexao);
?>