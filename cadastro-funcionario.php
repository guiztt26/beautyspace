<?php
include "conexao.php";

$cpf_funcionario = $_POST["cpf_funcionario"];
$nome_completo = $_POST["nome_completo"];
$rg_funcionario = $_POST["rg_funcionario"];
$dt_nascimento_funcionario = $_POST["dt_nascimento_funcionario"];
$sexo_funcionario = $_POST["sexo_funcionario"];
$telefone_fixo_funcionario = $_POST["telefone_fixo_funcionario"];
$telefone_movel_funcionario = $_POST["telefone_movel_funcionario"];
$email_funcionario = $_POST["email_funcionario"];
$estado_civil = $_POST["estado_civil"];
$descricao_contrato = $_POST["descricao_contrato"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$nome_cargo = $_POST["nome_cargo"];

$cargo = mysqli_query($conexao, "SELECT id_cargo FROM cargo WHERE nome_cargo = '$nome_cargo'");
$id_cargo = mysqli_fetch_assoc($cargo)['id_cargo'];

mysqli_query($conexao, "SELECT cpf_funcionario FROM funcionario WHERE cpf_funcionario = '$cpf_funcionario'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO funcionario VALUES ('$cpf_funcionario','$nome_completo','$rg_funcionario', '$dt_nascimento_funcionario', '$sexo_funcionario', '$estado_civil', '$telefone_fixo_funcionario', '$telefone_movel_funcionario', '$email_funcionario')");
	if($result1)
	{
		$result2 = mysqli_query($conexao, "INSERT INTO contrato_funcionario VALUES ('$cpf_funcionario', '$id_cargo', '$descricao_contrato', '$data_inicio', '$data_fim')");
		if($result2)
			echo "Funcionário cadastrado com sucesso!";
		else
			echo "Erro no cadastro do Contrato";
	}
	else
		echo "Erro no cadastro do Funcionário";
}
else
	echo "Funcionário já cadastrado!";

mysqli_close($conexao);
?>