<?php

include "includes/validacao.php";

?>


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
</script>
</head>
<body bgcolor="#C0DFFD">
<table width="100%" height="628" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#3366CC">
    <td colspan="3" rowspan="2"><img src="imagens/salao-de-beleza.jpg" width="442" height="149" /></td>
    <td height="63" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"> <div align="center">BeautySpace</div></td>
    <td width="5">&nbsp;</td>
  </tr>

  <tr bgcolor="#3366CC">
    <td height="83" colspan="3" id="tagline" valign="top" align="center"><div align="center">Sistema de Gerenciamento de Dados </div></td>
	<td width="5">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#003366"><img src="imagens/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td colspan="7" id="dateformat" height="25">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
 <tr>
    <td colspan="7" bgcolor="#003366"><img src="imagens/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

 <tr>
    <td width="353" height="436" valign="top" bgcolor="#E6F3FF">
      <ul>
        <li>Atendimento ao Cliente
          <ul>
            <li><a href="agendamento-form.php">Agendar Atendimento</a></li>
            <li><a href="cadastro-cliente-form.php">Cadastrar Cliente </a></li>
          </ul>
        </li><br>
        <li>Gerencial
          <ul>
            <li>Profissional de Estética
              <ul>
                <li><a href="cadastro-profissional-form.php">Cadastro de Profissional</a></li>
                <li><a href="cadastro-contrato-profissional-form.php">Cadastro de Contrato de Profissional</a></li>              
              </ul>
            </li>
            <li>Serviço
              <ul>
                <li><a href="cadastro-servico-form.php">Cadastro de Tipo de Serviço</a></li>
                <li><a href="cadastro-preco-servico-form.php">Cadastro de Preço de Serviço</a></li>           
              </ul>
            </li>
            <li>Aluguel
              <ul>
                <li><a href="cadastro-aluguel-form.php">Cadastro de Tipo de Aluguel</a></li>
                <li><a href="cadastro-preco-aluguel-form.php">Cadastro de Preço de Aluguel</a></li>        
              </ul>
            </li>
            <li>Funcionário
              <ul>
                <li><a href="cadastro-funcionario-form.php">Cadastro de Funcionário</a></li>
                <li><a href="cadastro-contrato-funcionario-form.php">Cadastro de Contrato de Funcionário</a></li>   
              </ul>
            </li>
            <li>Cargo
              <ul>
                <li><a href="cadastro-cargo-form.php">Cadastro de Cargo</a></li>             
              </ul>
             </li>
          </ul>
        </li>
        <li>Relatórios </li>
        <ul>
          <li>Consultas </li>
          <ul>
            <li><a href="consulta.html">Menu de Consultas</a></li>
          </ul>
        </ul>
      </ul>
      </td>
    <td width="74"><img src="imagens/mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="imagens/mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="305">
        <tr>
          <td class="pageName"><p>BeautySpace</p>
          </td>
		</tr>

		<tr>
          <td class="bodyText"><h3><a name="_Toc480641836" id="_Toc480641836">Visão</a> </h3>
            <p>“Ser  uma marca de salão de beleza reconhecida no mercado de Curitiba até 2018,  competindo de forma igual, no quesito reconhecimento de marca, com os melhores  salões da cidade”.</p>
            <h3><a name="_Toc480641837" id="_Toc480641837">Missão</a> </h3>
            <p>“Oferecer  serviços que proporcionem autoestima e motivação aos nossos clientes”.</p>
            <h3><a name="_Toc480641838" id="_Toc480641838">Valores</a> </h3>
            <p>&quot;Amor pelo que faz; transparência; sinergia; energia; transformação&quot;.            </p>
            <p align="justify">&nbsp;</p>

		</td>
        </tr>
      </table>
	   <br />	  </td>
    <td width="50"><img src="imagens/mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="190" valign="top"><br />
		&nbsp;<br />
		<table border="0" cellspacing="0" cellpadding="0" width="190">
			<tr>
			<td height="27" colspan="3" align="center" class="subHeader">Novos Serviços </td>
			</tr>

			<tr>
			<td width="40"><img src="imagens/mm_spacer.gif" alt="" width="40" height="1" border="0" /></td>
			<td width="110" id="sidebar" class="smallText"><br />
			<p><img src="imagens/limpeza de pele.jpg" width="131" height="126" /><br />
			Limpeza de Pele <br />
			<a href="javascript:;">Saiba mais &gt;</a></p>

			<p><img src="imagens/hidratação de cabelo.jpg" width="132" height="110" /><br />
			Hidratação de Cabelo <br />
			<a href="javascript:;">Saiba mais &gt;</a></p>
			 <br />
			&nbsp;<br />
			&nbsp;<br />			</td>
			<td width="40">&nbsp;</td>
			</tr>
	</table>	</td>
	<td width="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="353">&nbsp;</td>
    <td width="74">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="384">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="190">&nbsp;</td>
	<td width="5">&nbsp;</td>
  </tr>
</table>
</body>
</html>
