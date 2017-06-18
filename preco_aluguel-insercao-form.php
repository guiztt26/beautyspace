<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-novo-preco-de-aluguel-2/" method="post" name="cadastrar">
<table>
	<tbody>
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
			    echo "<option value='".$aluguel["tipo_servico"]."'>".$aluguel["tipo_aluguel"]."</option>";
			}
			echo "</select></td></tr>";
			
			?>
		</tr>
		<tr>
			<td><strong>Preço do Aluguel: </strong></td>
			<td><input id="preco_aluguel" maxlength="8" name="preco_aluguel" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Preço válido até: </span></td>
			<td><input id="data_validade" maxlength="4" name="data_validade" size="100" type="date" required=""/></td>
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