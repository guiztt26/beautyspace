<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Funcionários</title>
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
  <p>&nbsp;</p>
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Funcionários</font></span><br>
      <br>
    </p>
</div>
<form name="cadastrar" method="post" action="cadastro-funcionario.php" id="cadastrar">
  <table width="528" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="172"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome:</strong></font></td>
<td width="353"><input name="nome_completo" type="text" id="nome_completo" size="40" maxlength="48" required></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF:</strong></font></td>
<td><input name="cpf_funcionario" type="text" id="cpf_funcionario" size="40" maxlength="11"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>RG:</strong></font></td>
<td><input name="rg_funcionario" type="text" id="rg_funcionario" size="40" maxlength="11"></td>
</tr>
<tr>
<td width="172"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data Nasc:</strong></font></td>
<td width="353"><input name="dt_nascimento_funcionario" type="date" id="dt_nascimento_funcionario" size="40" maxlength="4"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sexo:</strong></font></td>
<td><select name="sexo_funcionario" size="1" id="sexo_funcionario">
<option value="M">M</option>
<option value="F">F</option>
</select></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Estado Civil:</strong></font></td>
<td><input name="estado_civil" type="text" id="estado_civil" size="40" maxlength="10"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tel. Fixo:</strong></font></td>
  <td><input name="telefone_fixo_funcionario" type="text" id="telefone_fixo_funcionario" size="40" maxlength="13"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tel. Movel:</strong></font></td>
  <td><input name="telefone_movel_funcionario" type="text" id="telefone_movel_funcionario" size="40" maxlength="13"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>email:</strong></font></td>
  <td><input name="email_funcionario" type="text" id="email_funcionario" size="40" maxlength="30"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Inicio do Contrato: </strong></font></td>
  <td><input name="data_inicio" type="date" id="data_fim" size="40" maxlength="4"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Fim do Contrato:</strong></font></td>
  <td><input name="data_fim" type="date" id="data_fim" size="40" maxlength="4"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome do Cargo:</strong></font></td>
  <td><input name="nome_cargo" type="text" id="nome_cargo" size="40" maxlength="48"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Descrição do Contrato:</strong></font></td>
  <td><input name="descricao_contrato" type="text" id="descricao_contrato" size="40" maxlength="255"></td>
  </tr>
<tr>
<td height="57" colspan="2"><div align="center"><input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
<input name="limpar" type="reset" id="limpar" value="Limpar Dados">
</div></td>
</tr>
</table>
</form>
<div align="center"><font face="Arial, Helvetica, sans-serif">[ <strong><a href="home.php">Voltar</a> </strong>]</font></div>
</div>
</body>
</html>