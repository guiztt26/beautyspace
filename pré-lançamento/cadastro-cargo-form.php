<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Cargos</title>
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
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Cargos</font></span><br>
    <br>
  </p>
</div>
<form name="cadastrar" method="post" action="cadastro-cargo.php" id="cadastrar">
  <table width="538" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="154"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome do Cargo:</strong></font></td>
<td width="381"><input name="nome_cargo" type="text" id="nome_cargo" size="40" maxlength="48"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Descrição do Cargo: </strong></font></td>
<td><input name="descricao" type="text" id="descricao" size="40" maxlength="255"></td>
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