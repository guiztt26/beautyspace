<?php

include "includes/conexao.php";

$cpf_cliente = $_POST["cpf_cliente"];
$nome_completo = $_POST["nome_completo"];
$rg_cliente = $_POST["rg_cliente"];
$dt_nascimento_cliente = $_POST["dt_nascimento_cliente"];
$sexo_cliente = $_POST["sexo_cliente"];
$telefone_fixo_cliente = $_POST["telefone_fixo_cliente"];
$telefone_movel_cliente = $_POST["telefone_movel_cliente"];
$email_cliente = $_POST["email_cliente"];
$facebook_cliente = $_POST["facebook_cliente"];
$estado_civil = $_POST["estado_civil"];
$profissao = $_POST["profissao"];
$cep = $_POST["cep"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$logradouro = $_POST["logradouro"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["UF"];

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
    <td width="348" height="436" valign="top" bgcolor="#E6F3FF">
      <ul>
        <li>Atendimento ao Cliente
          <ul>
            <li><a href="agendamento.html">Agendar Atendimento</a></li>
            <li><a href="">Alterar Atendimento Agendado</a></li>
            <li><a href="cadastro-cliente.html">Cadastrar Cliente</a></li>
            <li><a href="">Alterar Cadastro do Cliente</a></li>
          </ul>
        </li><br>
        <li>Gerencial
          <ul>
            <li>Profissional de Estética
              <ul>
                <li><a href="cadastro-profissional.html">Cadastro de Profissional</a></li>
                <li><a href="">Alteração do Cadastro do Profissional</a></li>
                <li><a href="cadastro-contrato-profissional.html">Cadastro de Contrato do Profissional</a></li>
                <li><a href="">Alteração do Contrato de Profissional</a></li>              
              </ul>
            </li>
            <li>Serviço
              <ul>
                <li><a href="cadastro-servico.html">Cadastro de Serviço</a></li>
                <li><a href="">Alteração de Serviço</a></li>
                <li><a href="cadastro-preco-servico.html">Cadastro de Preço do Serviço</a></li>
                <li><a href="">Alteração do Preço do Serviço</a></li>              
              </ul>
            </li>
            <li>Aluguel
              <ul>
                <li><a href="cadastro-aluguel.html">Cadastro de Aluguel</a></li>
                <li><a href="">Alteração de Aluguel</a></li>
                <li><a href="cadastro-preco-aluguel.html">Cadastro de Preço do Aluguel</a></li>
                <li><a href="">Alteração do Preço do Aluguel</a></li>              
              </ul>
            </li>
            <li>Funcionário
              <ul>
                <li><a href="cadastro-funcionario.html">Cadastro de Funcionário</a></li>
                <li><a href="">Alteração do Cadastro do Funcionário</a></li>
                <li><a href="cadastro-contrato-funcionario.html">Cadastro de Contrato do Funcionário</a></li>
                <li><a href="">Alteração do Contrato de Funcionário</a></li>              
              </ul>
            </li>
            <li>Cargo
              <ul>
                <li><a href="cadastro-cargo.html">Cadastro de Cargo</a></li>
                <li><a href="">Alteração de Cargo</a></li>             
              </ul>
            </li>
          </ul>
        </li>
      </ul>
 	 <br />
  	&nbsp;<br /> 	</td>
    <td width="79"><img src="imagens/mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
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
            <p>
            <?php

				mysqli_query($conexao, "SELECT cep FROM endereco WHERE cep = '$cep'");
				if(mysqli_affected_rows($conexao) == 0)
				{
					mysqli_query($conexao, "INSERT INTO endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep','$logradouro','$bairro', '$cidade', '$uf')");
					if(mysqli_affected_rows($conexao) == 1)
					{
						mysqli_query($conexao, "SELECT cpf_cliente FROM cliente WHERE cpf_cliente = '$cpf_cliente'");
						if(mysqli_affected_rows($conexao) == 0)
						{
							mysqli_query($conexao, "INSERT INTO cliente (cpf_cliente, nome_completo, rg, email, data_nascimento, telefone_fixo, telefone_movel, facebook, estado_civil, sexo, profissao, cep, numero, complemento) VALUES ('$cpf_cliente','$nome_completo', '$rg_cliente', '$email_cliente', '$dt_nascimento_cliente', '$telefone_fixo_cliente', '$telefone_movel_cliente', '$facebook_cliente', '$estado_civil', '$sexo_cliente', '$profissao', '$cep', '$numero', '$complemento')");
							if(mysqli_affected_rows($conexao) == 1)
							{
								echo "Cliente cadastrado com sucesso!<br><br>";
								echo "<a href="index - teste.html">Inicio</a><a href="cadastro-cliente.html">Cadastrar novo cliente</a>";
							}
							else
								echo "Erro no cadastro do cliente";
						}
						else
							echo "Cliente já cadastrado!";
					}
					else
						echo "Erro no cadastro do Endereço";	
				}
				else
				{
					mysqli_query($conexao, "SELECT cpf_cliente FROM cliente WHERE cpf_cliente = '$cpf_cliente'");
					if(mysqli_affected_rows($conexao) == 0)
					{
						mysqli_query($conexao, "INSERT INTO cliente (cpf_cliente, nome_completo, rg, email, data_nascimento, telefone_fixo, telefone_movel, facebook, estado_civil, sexo, profissao, cep, numero, complemento) VALUES ('$cpf_cliente','$nome_completo', '$rg_cliente', '$email_cliente', '$dt_nascimento_cliente', '$telefone_fixo_cliente', '$telefone_movel_cliente', '$facebook_cliente', '$estado_civil', '$sexo_cliente', '$profissao', '$cep', '$numero', '$complemento')");
						if(mysqli_affected_rows($conexao) == 1)
						{
							echo "Cliente cadastrado com sucesso!";
							echo "<a href="index - teste.html">Inicio</a><a href="cadastro-cliente.html">Cadastrar novo cliente</a>";
						}
						else
							echo "Erro no cadastro do cliente";
					}
					else
						echo "Cliente já cadastrado!";
				}

				mysqli_close($conexao);
				?>
            </p>
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
    <td width="348">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="384">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="190">&nbsp;</td>
	<td width="5">&nbsp;</td>
  </tr>
</table>
</body>
</html>