<?php
			
include "includes/conexao.php";


$nome_profissional = $_POST['cpf_profissional'];
$data = $_POST['data'];

$contrato_profissional = mysqli_query($conexao, "SELECT id_contrato FROM contrato_profissional WHERE data_inicio <= '$data' AND data_fim >= '$data' AND cpf_profissional = '$cpf_profissional'");
$id_contrato = mysqli_fetch_assoc($contrato_profissional)['id_contrato'];

$contrato_servico = mysqli_query($conexao, "SELECT id_contrato_servico FROM servico_contrato_profissional_estetica WHERE id_contrato = '$id_contrato'");
$id_contrato_servico = mysqli_fetch_assoc($contrato_servico)['id_contrato_servico'];


echo "<table><tr><td><b>Horário</b></td><td><b>Cliente</b></td></tr>";
$time = new DateTime('8:00');
for($i = 8; $i < 20; $i = $i + 0.5)
{
	$horario = $time->format('H:i');
	$result2 = mysqli_query($conexao, "SELECT cliente.nome_completo FROM clinte, agenda WHERE cliente.cpf_cliente = agenda.cpf_cliente and id_contrato_servico = '$id_contrato_servico' and horario = '$horario'");
	$result3 = mysqli_fetch_assoc($result2)['cliente.nome_completo'];
	echo "<tr><td>$horario</td><td>$result3</td></tr>";
	$time->add(new DateInterval('PT' . 30 . 'M'));
}
echo "</table>";

?>


