<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Profissionais de Estética</title>
<style type="text/css">
<!--
.style1 {
	color: #004000;
	font-weight: bold;
}
-->
</style>
</head>
<body leftmargin="0" topmargin="0">
<div id="meio" style="position:absolute; width:1361px; height:639px; z-index:0; left: 2px; top: -2px; background-color: #EAEAEA; layer-background-color: #EAEAEA; border: 1px none #000000;">
<div align="center">
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Profissionais de Estética </font></span><br>
      <br>
    </p>
  </div>
<form name="cadastrar" method="post" action="cadastro-profissional.php" id="cadastrar">
  <table width="522" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="172"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome:</strong></font></td>
<td width="347"><input name="nome_completo" type="text" id="nome_completo" size="40" maxlength="48"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF:</strong></font></td>
<td><input name="cpf_profissional" type="text" id="cpf_profissional" size="40" maxlength="11"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>RG:</strong></font></td>
<td><input name="rg_profissional" type="text" id="rg_profissional" size="40" maxlength="11"></td>
</tr>
<tr>
<td width="172"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data Nasc:</strong></font></td>
<td width="347"><input name="dt_nascimento_profissional" type="date" id="dt_nascimento_profissional" size="40" maxlength="4"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sexo:</strong></font></td>
<td><select name="sexo_profissional" size="1" id="sexo_profissional">
<option value="M">M</option>
<option value="F">F</option>
</select></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Estado Civil:</strong></font></td>
  <td><input name="estado_civil" type="text" id="estado_civil" size="40" maxlength="10"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Telefone Fixo:</strong></font></td>
  <td><input name="telefone_fixo_profissional" type="text" id="telefone_fixo_profissional" size="40" maxlength="13"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Telefone Movel:</strong></font></td>
  <td><input name="telefone_movel_profissional" type="text" id="telefone_movel_profissional" size="40" maxlength="13"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>email:</strong></font></td>
  <td><input name="email_profissional" type="text" id="email_profissional" size="40" maxlength="30"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Facebook:</strong></font></td>
  <td><input name="facebook_profissional" type="text" id="facebook_profissional" size="40" maxlength="48"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Inicio do Contrato:</strong></font></td>
  <td><input name="data_inicio" type="date" id="data_inicio" size="40" maxlength="4"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Fim do Contrato:</strong></font></td>
  <td><input name="data_fim" type="date" id="data_fim" size="40" maxlength="4"></td>
  </tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de Aluguel:</strong></font></td>
<td><select name="tipo_aluguel" size="1" id="tipo_aluguel">
  <option value="Master">Master</option>
  <option value="Basico">Basico</option>
</select></td>
</tr>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de Serviço: </strong></font></td>
  <td><input name="tipo_servico" type="text" id="tipo_servico" size="40" maxlength="30"></td>
  </tr>    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Descrição do Contrato: </strong></font></td>
        <td><input name="descricao_contrato" type="text" id="descricao_contrato" size="40" maxlength="255"></td>
  </tr>    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Banco:</strong></font></td>
      <td><input name="banco" type="text" id="banco" size="40" maxlength="3"></td>
  </tr>    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Agência:</strong></font></td>
      <td><input name="agencia" type="text" id="agencia" size="40" maxlength="4"></td>
  </tr>    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Número da Conta:</strong></font></td>
        <td><input name="num_con" type="text" id="num_con" size="40" maxlength="10"></td>
  </tr>
<tr>
<td height="31" colspan="2"><div align="center"><input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
<input name="limpar" type="reset" id="limpar" value="Limpar Dados">
</div></td>
</tr>
</table>
</form>
<div align="center"><font face="Arial, Helvetica, sans-serif">[ <strong><a href="home.php">Voltar</a> </strong>]</font></div>
</div>
</body>
</html>