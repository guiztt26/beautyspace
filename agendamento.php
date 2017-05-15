<?php

include "includes/conexao.php";

$cpf_cliente = $_POST["cpf_cliente"];
$nome_profissional = $_POST["nome_profissional"];
$tipo_servico = $_POST["tipo_servico"];
$data = $_POST["data"];
$horario = $_POST["horario"];
$cpf_profissional = $_POST["cpf_profissional"];

$profissional = mysqli_query($conexao, "SELECT cpf_profissional FROM profissional_estetica WHERE nome_completo = '$nome_profissional'");
$cpf_profissional = mysqli_fetch_assoc($profissional)['cpf_profissional'];

$servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
$id_servico = mysqli_fetch_assoc($servico)['id_servico'];

$contrato_profissional = mysqli_query($conexao, "SELECT id_contrato FROM contrato_profissional WHERE data_inicio <= '$data' AND data_fim >= '$data' AND cpf_profissional = '$cpf_profissional'");
$id_contrato = mysqli_fetch_assoc($contrato_profissional)['id_contrato'];

$contrato_servico = mysqli_query($conexao, "SELECT id_contrato_servico FROM servico_contrato_profissional_estetica WHERE id_contrato = '$id_contrato' and id_servico = '$id_servico'");
$id_contrato_servico = mysqli_fetch_assoc($contrato_servico)['id_contrato_servico'];
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Agendamento de Serviço</title>
	</head>
	<body>
		<div>
			<?php
			
			mysqli_query($conexao, "SELECT cpf_cliente FROM agenda WHERE cpf_cliente = '$cpf_cliente' AND data_agendada = '$data' AND horario = '$horario'");
			if(mysqli_affected_rows($conexao) == 0)
			{
				mysqli_query($conexao, "SELECT a.cpf_profissional FROM contrato_profissinal as a, servico_contrato_profissional_estetica as b, agenda as c WHERE a.cpf_profissional = '$cpf_profissional' AND  b.id_contrato_servico = '$id_contrato_servico' AND c.data_agendada = '$data' AND c.horario = '$horario'");
				if(mysqli_affected_rows($conexao) == 0)
				{
					$result1 = mysqli_query($conexao, "INSERT INTO agenda (cpf_cliente, id_contrato_servico, cpf_funcionario, data_agendada, horario) VALUES ('$cpf_cliente', '$id_contrato_servico', '$cpf_funcionario', '$data', '$horario')");
					if($result1)
						echo "Serviço agendado com sucesso!";
					else
						echo "Falha ao agendar o serviço.";
				}
				else
				{
					echo "O profissional possui uma pessoa agendada para este horário no dia $data. Selecione um horário disponível abaixo: <br>";
					echo "<tr><td><b>Horário</b></td><td><b>Cliente</b></td></tr>";
					for($i = 8; $i < 20; $i++)
					{
						$result1 = mysqli_query($conexao, "SELECT cliente.nome_completo FROM clinte, agenda WHERE cliente.cpf_cliente = agenda.cpf_cliente and id_contrato_servico = 'id_contrato_servico' and horario = '$i'");
						echo "<tr><td>$i</td><td>mysqli_fetch_assoc($result1)['cpf_cliente']</td></tr>";
					}
				}
			}	
			else
				echo "Este cliente já possui um horário marcado no dia e hora selecionados. Por favor, escolha um horário disponível.";

			mysqli_close($conexao);
			?>
		</div>
	</body>
</html>
