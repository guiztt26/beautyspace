<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-novo-c…de-funcionario-2/" method="post" name="cadastrar">
<table>
	<tbody>
		<tr>
			<td><strong>CPF do Funcionário:</strong></td>
			<td><input id="cpf_funcionario" maxlength="11" name="cpf_funcionario" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<?php

			error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

			$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

			mysqli_set_charset($conexao, 'utf8');

			mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");


			echo "<tr><td><strong>Cargo:</strong></td>";
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
			<td><strong>Data de Início do Contrato: </strong></td>
			<td><input id="data_inicio" maxlength="4" name="data_inicio" size="100" type="date" required=""/></td>
		</tr>
		<tr>
			<td><strong>Data do Fim do Contrato: </strong></td>
			<td><input id="data_fim" maxlength="4" name="data_fim" size="100" type="date" /></td>
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