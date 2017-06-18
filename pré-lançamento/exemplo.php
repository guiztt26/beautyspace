<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<form id="cadastrar" action="http://beautyspace.hol.es/cadastrar-profissional-de-estetica-2/" method="post" name="cadastrar">
<table border="0" width="522" cellspacing="1" cellpadding="0" align="center">
<tbody>
<tr>
<td width="172"><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Nome:</strong></span></td>
<td width="347"><input id="nome_completo" maxlength="48" name="nome_completo" size="40" type="text" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>CPF:</strong></span></td>
<td><input id="cpf_profissional" maxlength="11" name="cpf_profissional" size="40" type="text" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>RG:</strong></span></td>
<td><input id="rg_profissional" maxlength="11" name="rg_profissional" size="40" type="text" /></td>
</tr>
<tr>
<td width="172"><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Data Nasc:</strong></span></td>
<td width="347"><input id="dt_nascimento_profissional" maxlength="4" name="dt_nascimento_profissional" size="40" type="date" /></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Sexo:</strong></span></td>
<td><select id="sexo_profissional" name="sexo_profissional" size="1">
<option value="F">Feminino</option>
<option value="M">Masculino</option>
</select></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Estado Civil:</strong></span></td>
<td><select id="estado_civil" name="estado_civil" size="1">
<option value="Casado(a)">Casado(a)</option>
<option value="Solteiro(a)">Solteiro(a)</option>
<option value="Viúvo(a)">Viúvo(a)</option>
<option value="Divorciado(a)">Divorciado(a)</option>
<option value="Separado(a)">Separado(a)</option>
</select></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Telefone Fixo:</strong></span></td>
<td><input id="telefone_fixo_profissional" maxlength="13" name="telefone_fixo_profissional" size="40" type="tel" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Telefone Movel:</strong></span></td>
<td><input id="telefone_movel_profissional" maxlength="13" name="telefone_movel_profissional" size="40" type="tel" /></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Email:</strong></span></td>
<td><input id="email_profissional" maxlength="30" name="email_profissional" size="40" type="email" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Facebook:</strong></span></td>
<td><input id="facebook_profissional" maxlength="48" name="facebook_profissional" size="40" type="text" /></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Inicio do Contrato:</strong></span></td>
<td><input id="data_inicio" maxlength="4" name="data_inicio" size="40" type="date" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Fim do Contrato:</strong></span></td>
<td><input id="data_fim" maxlength="4" name="data_fim" size="40" type="date" /></td>
</tr>
<tr>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("mysql.hostinger.com.br", "u450791334_admin", "espaco25") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, 'u450791334_bs') or die("Não foi possível acessar o banco de dados");


echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>Tipo de Aluguel:</strong></font></td>";
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

echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>Tipo de Servico:</strong></font></td>";
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
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Descrição do Contrato: </strong></span></td>
<td><textarea name="descricao" id="descricao" rows="5" cols="50" maxlength="255"></textarea></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Banco:</strong></span></td>
<td><input id="banco" maxlength="3" name="banco" size="40" type="text" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Agência:</strong></span></td>
<td><input id="agencia" maxlength="4" name="agencia" size="40" type="text" required=""/></td>
</tr>
<tr>
<td><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><strong>Número da Conta:</strong></span></td>
<td><input id="num_con" maxlength="10" name="num_con" size="40" type="text" required=""/></td>
</tr>
<tr>
<td colspan="2" height="31">
<div align="center"><input id="enviar" name="enviar" type="submit" value="Enviar Cadastro" />
</div></td>
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