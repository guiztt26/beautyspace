<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Cadastro de Clientes</title>
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
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Cadastro de Clientes</font></span><br>
    <br>
  </p>
</div>
<form name="cadastrar" method="post" action="cadastro-cliente.php" id="cadastrar">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="157"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome:</strong></font></td>
<td width="240"><input name="nome_completo" type="text" id="nome_completo" size="40" maxlength="48"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF:</strong></font></td>
<td><input name="cpf_cliente" type="text" id="cpf_cliente" size="40" maxlength="11"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>RG:</strong></font></td>
<td><input name="rg_cliente" type="text" id="rg_cliente" size="40" maxlength="11"></td>
</tr>
<tr>
<td width="157"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data Nasc:</strong></font></td>
<td width="240"><input name="dt_nascimento_cliente" type="date" id="dt_nascimento_cliente" size="40" maxlength="4"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sexo:</strong></font></td>
<td><select name="sexo_cliente" size="1" id="sexo_cliente">
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
  <td><input name="telefone_fixo_cliente" type="text" id="telefone_fixo_cliente" size="40" maxlength="13"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tel. Movel:</strong></font></td>
  <td><input name="telefone_movel_cliente" type="text" id="telefone_movel_cliente" size="40" maxlength="13"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>email:</strong></font></td>
  <td><input name="email_cliente" type="text" id="email_cliente" size="40" maxlength="30"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Facebook:</strong></font></td>
  <td><input name="facebook_cliente" type="text" id="facebook_cliente" size="40" maxlength="48"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Profissao:</strong></font></td>
  <td><input name="profissao" type="text" id="profissao" size="40" maxlength="25"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CEP:</strong></font></td>
  <td><input name="cep" type="text" id="cep" size="40" maxlength="8"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Logradouro:</strong></font></td>
  <td><input name="logradouro" type="text" id="logradouro" size="40" maxlength="48"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Numero:</strong></font></td>
  <td><input name="numero" type="text" id="numero" size="40" maxlength="11"></td>
  </tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Complemento:</strong></font></td>
  <td><input name="complemento" type="text" id="complemento" size="40" maxlength="40"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Bairro:</strong></font></td>
  <td><input name="bairro" type="text" id="bairro" size="40" maxlength="15"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cidade:</strong></font></td>
  <td><input name="cidade" type="text" id="cidade" size="40" maxlength="25"></td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Estado:</strong></font></td>
  <td><input name="UF" type="text" id="UF" size="40" maxlength="2"></td>
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