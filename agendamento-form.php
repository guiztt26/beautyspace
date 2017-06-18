<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<form name="cadastrar" method="post" action="http://beautyspace.hol.es/agendar-atendimento-2/" id="cadastrar">
	<table>
		<tr>
			<?php

			error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

			$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

			mysqli_set_charset($conexao, 'utf8');

			mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

			echo "<tr><td><strong>Cliente:</strong></td>";
			echo "<td><select name=\"cpf_cliente\"  class=\"js-example-basic-multiple\" id=\"cpf_cliente\" ><option value=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT nome_completo, cpf_cliente FROM cliente ORDER BY nome_completo");


			while($cliente = mysqli_fetch_assoc($r1))  
			{
				echo "<option value='".$cliente["cpf_cliente"]."'>".$cliente["nome_completo"]."</option>";
			}

			echo "</select></td></tr>";
			?>
		</tr>
		<tr>
			<?php

			echo "<tr><td><font><strong>Tipo de Servico:</strong></font></td>";
			echo "<td><select name=\"tipo_servico\"  id=\"tipo_servico\"><option value=\"\" required=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT tipo_servico FROM servico");


			while($servico = mysqli_fetch_assoc($r1))  
			{
				echo "<option value='".$servico["tipo_servico"]."'>".$servico["tipo_servico"]."</option>";
			}
			echo "</select></td></tr>";

			?>
		</tr>
			<?php

			echo "<tr><td><font><strong>Profissional de Estética:</strong></font></td>";
			echo "<td><select name=\"nome_profissional\"  id=\"nome_profissional\"><option value=\"\" required=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT cpf_profissional, nome_completo FROM profissional_estetica ORDER BY nome_completo");

			while($profissional = mysqli_fetch_assoc($r1))  
			{
				echo "<option value='".$profissional["cpf_profissional"]."'>".$profissional["nome_completo"]."</option>";
			}
			echo "</select></td></tr>";

			?>
		<tr>
  			<td><strong>CPF do Funcionário:</strong></td>
  			<td><input name="cpf_funcionario" type="text" id="cpf_funcionario" size="100" maxlength="11"></td>
		</tr>
		<tr>
			<td><font><strong>Data Desejada: </strong></font></td>
			<td><input name="data_agendada" type="date" id="data_agendada" size="100" maxlength="4" required=""></td>
		</tr>
		<tr>
			<td><font><strong>Horário Desejado: </strong></font></td>
			<td><input name="horario" type="time" id="horario" size="100" maxlength="4" required=""></td>
		</tr>
		<tr>
			<td>
				<div align="center"><input name="enviar" type="submit" id="enviar" value="Enviar Cadastro"></div>
			</td>
		</tr>
	</table>
</form>


</style>
<script type="text/javascript">
$(".js-example-basic-multiple").select2();
</script>

<style type="text/css">
select {
		width:100%;
}

.select2-container {
		width:100% !important;
		color:#333;
}

.select2-container .selection {
		color:#333;
}

</style>