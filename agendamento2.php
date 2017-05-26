<?php

include "includes/validacao.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset = "UTF-8">
<title>BeautySpace - Agendamento</title>
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
  <p><span class="style1"><font size="5" face="Arial, Helvetica, sans-serif">Agendamento de Atendimento de Clientes </font></span><br>
    <br>
  </p>
</div>
<form name="cadastrar" method="post" action="agendamento.php" id="cadastrar">
  <table width="541" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF do Cliente:</strong></font></td>
  <td><input name="cpf_cliente" type="text" id="cpf_cliente" size="40" maxlength="11"></td>
</tr>
<tr>
<td width="178"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de Serviço:</strong></font></td>
<td width="360"><input name="tipo_servico" type="text" id="tipo_servico" size="40" maxlength="30"></td>
</tr>
<?php

include "includes/conexao.php";

echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>Profissional de Estética:</strong></font></td>";
echo "<td><select name=\"nome_profissional\"  id=\"nome_profissional\"><option value=\"\">Selecione</option>";

$r1 = mysqli_query($conexao, "SELECT cpf_profissional, nome_profissional FROM profissional_estetica");


while($profissional = mysqli_fetch_assoc($r1))  
{
  //$r2 = mysqli_result($conexao, $r1, $i, "nome_completo");
  echo "<option value='".$profissional["cpf_profissional"]."'>".$profissional["nome_profissional"]."</option>";
}
echo "</select></td></tr>";
?>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CPF do Funcionário:</strong></font></td>
  <td><input name="cpf_funcionario" type="text" id="cpf_funcionario" size="40" maxlength="11"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Data Desejada: </strong></font></td>
<td><input name="data_agendada" type="date" id="data_agendada" size="40" maxlength="4"></td>
</tr>
<tr>
<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Horário Desejado: </strong></font></td>
<td><input name="horario" type="time" id="horario" size="40" maxlength="4"></td>
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