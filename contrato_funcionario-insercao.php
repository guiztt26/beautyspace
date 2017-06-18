<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

$descricao_contrato = $_POST["descricao"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$cpf_funcionario = $_POST["cpf_funcionario"];
$nome_cargo = $_POST["nome_cargo"];

$cargo = mysqli_query($conexao, "SELECT id_cargo FROM cargo WHERE nome_cargo = '$nome_cargo'");
$id_cargo = mysqli_fetch_assoc($cargo)['id_cargo'];

mysqli_query($conexao, "SELECT cpf_funcionario FROM contrato_funcionario WHERE cpf_funcionario = '$cpf_funcionario'");
if(mysqli_affected_rows($conexao) == 1)
{
	$data = mysqli_query($conexao, "SELECT data_fim FROM contrato_funcionario WHERE data_fim >= '$data_inicio'  AND cpf_funcionario = '$cpf_funcionario' ORDER BY id_contrato DESC");
	if (mysqli_affected_rows($conexao) == 0)
	{
		mysqli_query($conexao, "INSERT INTO contrato_funcionario (cpf_funcionario, id_cargo, descricao, data_inicio, data_fim) VALUES ('$cpf_funcionario', '$id_cargo', '$descricao_contrato', '$data_inicio', '$data_fim')");
		if(mysqli_affected_rows($conexao) == 1)
			echo "Contrato cadastrado com sucesso!";
		else
			echo "Erro no cadastro do Contrato";
	}
	else
	{
		$dt = mysqli_fetch_assoc($data)['data_fim'];
		echo "Existe um contrato vigente cadastrado para este funcionário. Cadastre um contrato com data inicial posteior a $dt";
	}
}
else
	echo "Este funcionário ainda não está cadastrado. Por favor, verifique se CPF digitado está correto ou cadastre o funcionário.";

mysqli_close($conexao);
?>