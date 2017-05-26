<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="imagens/mm_travel2.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário Centralizado</title>
<style type="text/css">
* { margin: 0; padding: 0; font-family:Tahoma; font-size:9pt;}
#divCenter { 
background-color: #e1e1e1; 
width: 400px; 
height: 150px; 
left: 50%; 
margin: -130px 0 0 -210px; 
padding:10px;
position: absolute; 
top: 50%; }
</style>
</script>
<style type="text/css">
<!--
.style3 {color: #000080}
.style6 {
	color: #FFFFFF;
	font-weight: bold;
}
.style12 {color: #00FFFF}
-->
</style>
</head>
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td colspan="3" rowspan="2"><p>&nbsp;</p>
    <p>&nbsp;</p>    </td>
    <td height="89" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"><p class="style6">BeautySpace</p>    </td>
    <td width="338">&nbsp;</td>
  </tr>

  <tr bgcolor="#3366CC">
    <td height="19" colspan="3" id="tagline" valign="top" align="center"><p class="style12">Sistema de Gerenciamento de Dados </p>    </td>
	<td width="338">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#003366"><img src="imagens/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td colspan="7" id="dateformat" height="46">&nbsp;&nbsp;
    <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
 <tr>
    <td colspan="7" bgcolor="#003366"><img src="imagens/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
  <tr>
    <form name="dados_login" method="post" action="autenticar.php">
      <TABLE>
        <TR>
          <TD>Email</TD>
          <TD><INPUT TYPE = "text" NAME = "email"></TD>
        </TR>
        <TR>
          <TD>Password</TD>
          <TD><INPUT TYPE = "password" NAME = "password"></TD>
        </TR>
      </TABLE>
      <INPUT TYPE = "submit" VALUE = "Acessar" NAME = "acessar">
      <INPUT TYPE = "reset" VALUE = "Limpar" NAME = "Limpar">
    </FORM>
  </tr>
</table>
<div id="divCenter">
<form id="frmPost" action="">
<div align="center">
  <input name="submit" type="submit" />
</div>
</body>
</html>
