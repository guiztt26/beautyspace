<?php

include "includes/conexao.php";

$descricao_contrato = $_POST["descricao"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$cpf_profissional = $_POST["cpf_profissional"];
$tipo_aluguel = $_POST["tipo_aluguel"];
$tipo_servico = $_POST["tipo_servico"];

$aluguel = mysqli_query($conexao, "SELECT id_aluguel FROM aluguel WHERE tipo_aluguel = '$tipo_aluguel'");
$id_aluguel = mysqli_fetch_assoc($aluguel)['id_aluguel'];

$servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
$id_servico = mysqli_fetch_assoc($servico)['id_servico'];

mysqli_query($conexao, "SELECT cpf_profissional FROM profissional_estetica WHERE cpf_profissional = '$cpf_profissional'");
if(mysqli_affected_rows($conexao) == 1)
{
	$data = mysqli_query($conexao, "SELECT data_fim FROM contrato_profissional WHERE data_fim >= '$data_inicio' and cpf_profissional = '$cpf_profissional' ORDER BY id_contrato DESC");
	if (mysqli_affected_rows($conexao) == 0)
	{
		$result1 = mysqli_query($conexao, "INSERT INTO contrato_profissional (descricao, data_inicio, data_fim, cpf_profissional, id_aluguel) VALUES ('$descricao_contrato', '$data_inicio', '$data_fim', '$cpf_profissional', '$id_aluguel')");
		if($result1)
		{
			$id_contrato = mysqli_insert_id($conexao);
			$result2 = mysqli_query($conexao, "INSERT INTO servico_contrato_profissional_estetica (id_contrato, id_servico) VALUES ('$id_contrato', '$id_servico')");
			if($result2)
				echo "Contrato cadastrado com sucesso!";
			else
			{
				mysqli_query($conexao, "DELETE FROM contrato_profissional WHERE id_contrato = '$id_contrato'");
				echo "Erro no cadastro do Contrato";
			}	
		}
		else
			echo "Erro no cadastro do Contrato";
	}
	else
	{
		$dt = mysqli_fetch_assoc($data)['data_fim'];
		echo "Existe um contrato vigente cadastrado para este profissional. Cadastre um contrato com data inicial posteior a $dt";
	}
}
else
	echo "CPF não encontrado. Por favor, verifique se digitou o CPF corretamente ou cadastre o profissional de estética.";

mysqli_close($conexao);
?>