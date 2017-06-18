<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-aluguel-2/" method="post" name="cadastrar">
<table>
	<tbody>
		<tr>
			<td><strong>Tipo do Aluguel:</strong></td>
			<td><input id="tipo_aluguel" maxlength="30" name="tipo_aluguel" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Descrição do Serviço: </strong></td>
			<td><textarea name="descricao" id="descricao" rows="5" cols="100" maxlength="255" required=""></textarea></td>
		</tr>
		<tr>
			<td><strong>Preço do Serviço: </strong></td>
			<td><input id="preco_aluguel" maxlength="8" name="preco_aluguel" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Preço válido até:</strong></td>
			<td width="359"><input id="data_validade" maxlength="4" name="data_validade" size="100" type="date" required=""/></td>
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