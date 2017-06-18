<form id="cadastrar" action="http://beautyspace.hol.es/cadastro-de-cliente-2/" method="post" name="cadastrar">
<table>
	<tbody>
		<tr>
			<td><strong>Nome:</strong></td>
			<td><input id="nome_completo" maxlength="48" name="nome_completo" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>CPF:</strong></td>
			<td><input id="cpf_cliente" maxlength="11" name="cpf_cliente" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>RG:</strong></td>
			<td><input id="rg_cliente" maxlength="11" name="rg_cliente" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Data Nasc:</strong></td>
			<td><input id="dt_nascimento_cliente" maxlength="4" name="dt_nascimento_cliente" size="100" type="date" /></td>
		</tr>
		<tr>
			<td><strong>Sexo:</strong></td>
			<td><select id="sexo_cliente" name="sexo_cliente" size="1">
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
			<td><input id="telefone_fixo_cliente" maxlength="13" name="telefone_fixo_cliente" size="100" type="tel" /></td>
		</tr>
		<tr>
			<td><strong>Tel. Movel:</strong></td>
			<td><input id="telefone_movel_cliente" maxlength="13" name="telefone_movel_cliente" size="100" type="tel" /></td>
		</tr>
		<tr>
			<td><strong>email:</strong></td>
			<td><input id="email_cliente" maxlength="30" name="email_cliente" size="100" type="email" /></td>
		</tr>
		<tr>
			<td><strong>Facebook:</strong></td>
			<td><input id="facebook_cliente" maxlength="48" name="facebook_cliente" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Profissao:</strong></td>
			<td><input id="profissao" maxlength="25" name="profissao" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>CEP:</strong></td>
			<td><input id="cep" maxlength="8" name="cep" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Logradouro:</strong></td>
			<td><input id="logradouro" maxlength="48" name="logradouro" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Numero:</strong></td>
			<td><input id="numero" maxlength="11" name="numero" size="100" type="text" required=""/></td>
		</tr>
		<tr>
			<td><strong>Complemento:</strong></td>
			<td><input id="complemento" maxlength="40" name="complemento" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Bairro:</strong></td>
			<td><input id="bairro" maxlength="15" name="bairro" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Cidade:</strong></td>
			<td><input id="cidade" maxlength="25" name="cidade" size="100" type="text" /></td>
		</tr>
		<tr>
			<td><strong>Estado:</strong></td>
			<td><input id="UF" maxlength="2" name="UF" size="100" type="text" /></td>
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
