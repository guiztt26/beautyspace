<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Alugueis</title>
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
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Tipos de Alugueis</font></span><br>
    <br>
  </p>
</div>
<form name="cadastrar" method="post" action="cadastro-aluguel.php" id="cadastrar">
  <table width="584" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="241"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo do Aluguel:</strong></font></td>
<td width="340"><input name="tipo_aluguel" type="text" id="tipo_aluguel" size="40" maxlength="30"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Descrição do tipo de Aluguel: </strong></font></td>
<td><input name="descricao" type="text" id="descricao" size="40" maxlength="255"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Preço do Aluguel: </strong></font></td>
<td><input name="preco_aluguel" type="text" id="preco_aluguel" size="40" maxlength="8"></td>
</tr>
<tr>
<td width="241"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Preço válido até: </font></strong></td>
<td width="340"><input name="dt_validade" type="date" id="dt_validade" size="40" maxlength="4"></td>
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