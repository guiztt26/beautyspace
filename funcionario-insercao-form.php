<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-funcionario-2/" method="post" name="cadastrar">
<table>
	<tbody>
		<tr>
			<td><strong>Nome:</strong></td>
			<td><input id="nome_completo" maxlength="48" name="nome_completo" required="" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>CPF:</strong></td>
			<td><input id="cpf_funcionario" maxlength="11" name="cpf_funcionario" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>RG:</strong></td>
			<td><input id="rg_funcionario" maxlength="11" name="rg_funcionario" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Data Nasc:</strong></td>
			<td><input id="dt_nascimento_funcionario" maxlength="4" name="dt_nascimento_funcionario" size="100" type="date" /></td>
		</tr>
		<tr>
			<td><strong>Sexo:</strong></td>
			<td><select id="sexo_funcionario" name="sexo_funcionario" size="1">
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
			<td><strong>Tel. Fixo:</strong></td>
			<td><input id="telefone_fixo_funcionario" maxlength="13" name="telefone_fixo_funcionario" size="100" type="tel" required=""/></td>
		</tr>
		<tr>
			<td><strong>Tel. Movel:</strong></td>
			<td><input id="telefone_movel_funcionario" maxlength="13" name="telefone_movel_funcionario" size="100" type="tel" /></td>
		</tr>
		<tr>
			<td><strong>email:</strong></td>
			<td><input id="email_funcionario" maxlength="30" name="email_funcionario" size="100" type="email" required=""/></td>
		</tr>
		<tr>
			<td><strong>Inicio do Contrato: </strong></td>
			<td><input id="data_fim" maxlength="4" name="data_inicio" size="100" type="date" required=""/></td>
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


			echo "<tr><td><font><strong>Cargo:</strong></font></td>";
			echo "<td><select name=\"nome_cargo\"  id=\"nome_cargo\"><option value=\"\" required=\"\">Selecione</option>";

			$r1 = mysqli_query($conexao, "SELECT nome_cargo FROM cargo");


			while($cargo = mysqli_fetch_assoc($r1))  
			{
				echo "<option value='".$cargo["nome_cargo"]."'>".$cargo["nome_cargo"]."</option>";
			}
			echo "</select></td></tr>";
			
			?>
		</tr>
		<tr>
			<td><strong>Descrição do Contrato:</strong></td>
			<td><textarea name="descricao" id="descricao" rows="5" cols="100" maxlength="255"></textarea></td>
		</tr>
		<tr>
			<td>
			<div align="center"><input id="enviar" name="enviar" type="submit" value="Enviar Cadastro" /></div>
			</td>
		</tr>
	</tbody>
</table>
</form>


<style type="text/css">
select {
width:100%;
}
</style>