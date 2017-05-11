<?php

include "includes/conexao.php";

$cpf_profissional = $_POST["cpf_profissional"];
$nome_completo = $_POST["nome_completo"];
$rg_profissional = $_POST["rg_profissional"];
$dt_nascimento_profissional = $_POST["dt_nascimento_profissional"];
$sexo_profissional = $_POST["sexo_profissional"];
$telefone_fixo_profissional = $_POST["telefone_fixo_profissional"];
$telefone_movel_profissional = $_POST["telefone_movel_profissional"];
$email_profissional = $_POST["email_profissional"];
$facebook_profissional = $_POST["facebook_profissional"];
$estado_civil = $_POST["estado_civil"];
$banco = $_POST["banco"];
$agencia = $_POST["agencia"];
$num_con = $_POST["num_con"];
$descricao_contrato = $_POST["descricao_contrato"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];
$tipo_aluguel = $_POST["tipo_aluguel"];
$tipo_servico = $_POST["tipo_servico"];

$aluguel = mysqli_query($conexao, "SELECT id_aluguel FROM aluguel WHERE tipo_aluguel = '$tipo_aluguel'");
$id_aluguel = mysqli_fetch_assoc($aluguel)['id_aluguel'];

$servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'"))
$id_servico = mysqli_fetch_assoc($servico)['id_servico'];

mysqli_query($conexao, "SELECT cpf_profissional FROM profissional_estetica WHERE cpf_profissional = '$cpf_profissional'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO profissional_estetica (cpf_profissional, nome_completo, rg, data_nascimento, sexo, estado_civil, telefone_fixo, telefone_movel, email, facebook, banco, agencia, num_con) VALUES ('$cpf_profissional','$nome_completo','$rg_profissional', '$dt_nascimento_profissional', '$sexo_profissional', '$estado_civil', '$telefone_fixo_profissional', '$telefone_movel_profissional', '$email_profissional', '$facebook_profissional', '$banco', '$agencia', '$num_con')");
	if($result1)
	{
		$result2 = mysqli_query($conexao, "INSERT INTO contrato_profissional (descricao, data_inicio, data_fim, cpf_profissional, id_aluguel) VALUES ('$descricao_contrato', '$data_inicio', '$data_fim', '$cpf_profissional', '$id_aluguel')");
		if($result2)
		{
			$id_contrato = mysqli_insert_id($conexao);
			$result3 = mysqli_query($conexao, "INSERT INTO servico_contrato_profissional_estetica (id_contrato, id_servico) VALUES ('$id_contrato', '$id_servico')");
			if($result3)
				echo "Profissional cadastrado com sucesso!";
			else
			{
				mysqli_query($conexao, "DELETE FROM profissional_estetica WHERE cpf_profissional = '$cpf_profissional'");
				mysqli_query($conexao, "DELETE FROM contrato_profissional WHERE id_contrato = '$id_contrato'");
				echo "Erro ao cadastrar o serviço";
			}
		}
		else
		{
			mysqli_query($conexao, "DELETE FROM profissional_estetica WHERE cpf_profissional = '$cpf_profissional'");
			echo "Erro no cadastro do Contrato";
		}
	}
	else
		echo "Erro no cadastro do Profissional de Estética";
}
else
	echo "Profissional de Estética já cadastrado!";

mysqli_close($conexao);
?>