<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Contratos de Profissionais</title>
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
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Contratos de Profissionais</font></span><br>
    <br>
  </p>
</div>
<form name="cadastrar" method="post" action="cadastro-contrato-profissional.php" id="cadastrar">
  <table width="541" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF do Profissional:</strong></font></td>
  <td><input name="cpf_profissional" type="text" id="cpf_profissional" size="40" maxlength="11"></td>
</tr>
<tr>
<td width="214"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Descrição do Contrato:</strong></font></td>
<td width="324"><input name="descricao" type="text" id="descricao" size="40" maxlength="255"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de Aluguel:</strong></font></td>
  <td><input name="tipo_aluguel" type="text" id="tipo_aluguel" size="40" maxlength="30"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de Serviço:</strong></font></td>
  <td><input name="tipo_servico" type="text" id="tipo_servico" size="40" maxlength="30"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data de Início do Contrato: </strong></font></td>
<td><input name="data_inicio" type="date" id="data_inicio" size="40" maxlength="4"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data do Fim do Contrato: </strong></font></td>
<td><input name="data_fim" type="date" id="data_fim" size="40" maxlength="4"></td>
</tr>
<tr>
<td height="39" colspan="2"><div align="center"><input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
<input name="limpar" type="reset" id="limpar" value="Limpar Dados">
</div></td>
</tr>
</table>
</form>
<div align="center"><font face="Arial, Helvetica, sans-serif">[ <strong><a href="home.php">Voltar</a> </strong>]</font></div>
</div>
</body>
</html>