<?php

include "includes/validacao.php";			
include "includes/conexao.php";

$cpf_cliente = $_POST["cpf_cliente"];
$nome_profissional = $_POST["nome_profissional"];
$tipo_servico = $_POST["tipo_servico"];
$data = $_POST["data_agendada"];
$horario = $_POST["horario"];
$cpf_funcionario = $_POST["cpf_funcionario"];

$profissional = mysqli_query($conexao, "SELECT cpf_profissional FROM profissional_estetica WHERE nome_profissional = '$nome_profissional'");
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

			if($profissional)
			{
				if($servico)
				{
					if($contrato_profissional)
					{
						if($contrato_servico)
						{
							if($cpf_cliente)
							{
								mysqli_query($conexao, "SELECT cpf_cliente FROM agenda WHERE cpf_cliente = '$cpf_cliente' AND data_agendada = '$data' AND horario = '$horario'");
								if(mysqli_affected_rows($conexao) == 0)
								{
									mysqli_query($conexao, "SELECT contrato_profissional.cpf_profissional FROM contrato_profissional, servico_contrato_profissional_estetica, agenda WHERE contrato_profissional.cpf_profissional = '$cpf_profissional' AND  servico_contrato_profissional_estetica.id_contrato_servico = '$id_contrato_servico' AND agenda.data_agendada = '$data' AND agenda.horario = '$horario'");
									if(mysqli_affected_rows($conexao) == 0)
									{
										$result1 = mysqli_query($conexao, "INSERT INTO agenda (cpf_cliente, id_contrato_servico, cpf_funcionario, data_agendada, horario) VALUES ('$cpf_cliente', '$id_contrato_servico', '$cpf_funcionario', '$data', '$horario')");
										if($result1)
											echo "Serviço agendado com sucesso!";
										else
											echo mysqli_error($conexao);
									}
									else
									{
										echo "O profissional possui uma pessoa agendada para este horário no dia $data. Selecione um horário disponível abaixo:";
										echo "<br>";
										echo "<table><tr><td><b>Horário</b></td><td><b>Cliente</b></td></tr>";
										$time = new DateTime('8:00');
										for($i = 8; $i < 20; $i++)
										{
											$horario = $time->format('H:i');
											$result2 = mysqli_query($conexao, "SELECT cliente.nome_completo FROM clinte, agenda WHERE cliente.cpf_cliente = agenda.cpf_cliente and id_contrato_servico = '$id_contrato_servico' and horario = '$horario'");
											$result3 = mysqli_fetch_assoc($result2)['cliente.nome_completo'];
											echo "<tr><td>$horario</td><td>$result3</td></tr>";
											$time->add(new DateInterval('PT' . 30 . 'M'));
										}
										echo "</table>";
									}
								}	
								else
									echo "Este cliente já possui um horário marcado no dia e hora selecionados. Por favor, escolha um horário disponível.";
							}
							else
							{
								echo "Este cliente ainda não possui um cadastro. Por favor, verifique o CPF digitado ou cadastre o cliente no sistema.<br><br>";
								echo "<a href="cadastro-cliente.html" target="_blank">Cadastro de cliente</a>";
							}
						}
						else
						{
							$cliente = mysqli_query($conexao, "SELECT nome_completo FROM cliente WHERE cpf_cliente = '$cpf_cliente'");
							$nome_cliente = mysqli_fetch_assoc($cliente);
							echo "Este profissional não presta o serviço selecionado para o contrato corrente. Por favor, selecione um profissional diferente para atender o $nome_cliente";
						}
					}
					else
						echo "Este profissional não foi possui um contrato cadastrado válido para a data solicitada no agendamento. Verifique com o gestor sobre a situação deste profissional para esta data ou selecione um profissinal diferente para prestar o serviço.";
				}
				else
					echo "Este serviço não está cadastrado no sistema. Por favor, verifique se digitou o nome do serviço corretamente ou selecione um serviço diferente.";
			}
			else
				echo "Este profissional não está cadastrado. Por favor, verifique se digitou o nome corretamente ou selecione um profissional diferente.";


			mysqli_close($conexao);
			?>
		</div>
	</body>
</html>
