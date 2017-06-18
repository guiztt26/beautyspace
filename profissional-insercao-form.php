<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-profissional-de-estetica-2/" method="post" name="cadastrar">
<table>
	<tbody>
		<tr>
			<td><strong>Nome:</strong></td>
			<td><input id="nome_completo" maxlength="48" name="nome_completo" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>CPF:</strong></td>
			<td><input id="cpf_profissional" maxlength="11" name="cpf_profissional" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>RG:</strong></td>
			<td><input id="rg_profissional" maxlength="11" name="rg_profissional" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Data Nasc:</strong></td>
			<td width="347"><input id="dt_nascimento_profissional" maxlength="4" name="dt_nascimento_profissional" size="100" type="date" /></td>
		</tr>
		<tr>
			<td><strong>Sexo:</strong></td>
			<td><select id="sexo_profissional" name="sexo_profissional" size="1">
				<option value="F">Feminino</option>
				<option value="M">Masculino</option>
			</select></td>
		</tr>
		<tr>
			<td><strong>Estado Civil:</strong></td>
			<td><select id="estado_civil" name="estado_civil" size="1">
				<option value="Casado(a)">Casado(a)</option>
				<option value="Solteiro(a)">Solteiro(a)</option>
				<option value="Viúvo(a)">Viúvo(a)</option>
				<option value="Divorciado(a)">Divorciado(a)</option>
				<option value="Separado(a)">Separado(a)</option>
			</select></td>
		</tr>
		<tr>
			<td><strong>Telefone Fixo:</strong></td>
			<td><input id="telefone_fixo_profissional" maxlength="13" name="telefone_fixo_profissional" size="100" type="tel" required=""/></td>
		</tr>
		<tr>
			<td><strong>Telefone Movel:</strong></td>
			<td><input id="telefone_movel_profissional" maxlength="13" name="telefone_movel_profissional" size="100" type="tel" /></td>
		</tr>
		<tr>
			<td><strong>Email:</strong></td>
			<td><input id="email_profissional" maxlength="30" name="email_profissional" size="100" type="email" required=""/></td>
		</tr>
		<tr>
			<td><strong>Facebook:</strong></td>
			<td><input id="facebook_profissional" maxlength="48" name="facebook_profissional" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Inicio do Contrato:</strong></td>
			<td><input id="data_inicio" maxlength="4" name="data_inicio" size="100" type="date" required=""/></td>
		</tr>
		<tr>
			<td><strong>Fim do Contrato:</strong></td>
			<td><input id="data_fim" maxlength="4" name="data_fim" size="100" type="date" /></td>
		</tr>
		<tr>
			<?php

			error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

			$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

			mysqli_set_charset($conexao, 'utf8');

			mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");


			echo "<tr><td><strong>Tipo de Aluguel:</strong></td>";
			echo "<td><select name=\"tipo_aluguel\"  id=\"tipo_aluguel\"><option value=\"\" required=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT tipo_aluguel FROM aluguel");


			while($aluguel = mysqli_fetch_assoc($r1))  
			{
			    echo "<option value='".$aluguel["tipo_aluguel"]."'>".$aluguel["tipo_aluguel"]."</option>";
			}
			echo "</select></td></tr>";
			
			?>
			</select></td>
		</tr>
		<tr>
			<?php

			echo "<tr><td><strong>Tipo de Servico:</strong></td>";
			echo "<td><select name=\"tipo_servico[]\"  class=\"js-example-basic-multiple\" id=\"tipo_servico\" multiple=\"multiple\"><option value=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT tipo_servico FROM servico");


			while($servico = mysqli_fetch_assoc($r1))  
			{
				echo "<option value='".$servico["tipo_servico"]."'>".$servico["tipo_servico"]."</option>";
			}
			echo "</select></td></tr>";
			
			?>
		</tr>
		<tr>
			<td><strong>Descrição do Contrato: </strong></td>
			<td><textarea name="descricao" id="descricao" rows="5" cols="100" maxlength="255"></textarea></td>
		</tr>
		<tr>
			<td><strong>Banco:</strong></td>
			<td><input id="banco" maxlength="3" name="banco" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Agência:</strong></td>
			<td><input id="agencia" maxlength="4" name="agencia" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Número da Conta:</strong></td>
			<td><input id="num_con" maxlength="10" name="num_con" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td>
			<div align="center"><input id="enviar" name="enviar" type="submit" value="Enviar Cadastro" /></div>
			</td>
		</tr>
	</tbody>
</table>
</form>

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