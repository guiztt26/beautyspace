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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta charset = "UTF-8">
    <title>BeautySpace - Cadastro de Clientes</title>
  </head>
  <body>
    <table>
        <table>
          <tr>
            <td width="348" height="436" valign="top">
              <ul>
                <li>Atendimento ao Cliente
                  <ul>
                    <li><a href="agendamento.html">Agendar Atendimento</a></li>
                    <li><a href="cadastro-cliente.html">Cadastrar Cliente</a></li>
                  </ul>
                </li><br>
                <li>Gerencial
                  <ul>
                    <li>Profissional de Estética
                      <ul>
                        <li><a href="cadastro-profissional.html">Cadastro de Profissional</a></li>
                        <li><a href="cadastro-contrato-profissional.html">Cadastro de Contrato do Profissional</a></li>             
                      </ul>
                    </li>
                    <li>Serviço
                      <ul>
                        <li><a href="cadastro-servico.html">Cadastro de Serviço</a></li>
                        <li><a href="cadastro-preco-servico.html">Cadastro de Preço do Serviço</a></li>             
                      </ul>
                    </li>
                    <li>Aluguel
                      <ul>
                        <li><a href="cadastro-aluguel.html">Cadastro de Aluguel</a></li>
                        <li><a href="cadastro-preco-aluguel.html">Cadastro de Preço do Aluguel</a></li>    
                      </ul>
                    </li>
                    <li>Funcionário
                      <ul>
                        <li><a href="cadastro-funcionario.html">Cadastro de Funcionário</a></li>
                        <li><a href="cadastro-contrato-funcionario.html">Cadastro de Contrato do Funcionário</a></li>         
                      </ul>
                    </li>
                    <li>Cargo
                      <ul>
                        <li><a href="cadastro-cargo.html">Cadastro de Cargo</a></li>          
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </tr>
        </table>
        <table>
          <tr>
            <td>
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
					     			echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
				    			}
				    			else
                  {
                    echo "Erro no cadastro do cliente<br><br>";
                    echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
                  }
				    		}
				    		else
                {
                  echo "Cliente já cadastrado!<br><br>";
                  echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
                }
				    	 }
				      	else
                {
                  echo "Erro no cadastro do Endereço<br><br>";
                  echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
                }
		  		    }
	   			    else
		  		    {
		  		    	mysqli_query($conexao, "SELECT cpf_cliente FROM cliente WHERE cpf_cliente = '$cpf_cliente'");
			   	    	if(mysqli_affected_rows($conexao) == 0)
				       	{
				      		mysqli_query($conexao, "INSERT INTO cliente (cpf_cliente, nome_completo, rg, email, data_nascimento, telefone_fixo, telefone_movel, facebook, estado_civil, sexo, profissao, cep, numero, complemento) VALUES ('$cpf_cliente','$nome_completo', '$rg_cliente', '$email_cliente', '$dt_nascimento_cliente', '$telefone_fixo_cliente', '$telefone_movel_cliente', '$facebook_cliente', '$estado_civil', '$sexo_cliente', '$profissao', '$cep', '$numero', '$complemento')");
			       			if(mysqli_affected_rows($conexao) == 1)
		       				{
		       					echo "Cliente cadastrado com sucesso!<br><br>";
		    	   				echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
			    	  		}
			       			else
                  {
			   				    echo "Erro no cadastro do cliente<br><br>";
                    echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
                  }
		    	   		}
			      		else
                {
			   	   		  echo "Cliente já cadastrado!<br><br>";
                  echo "<a href=\"index.html\">Inicio</a><a href=\"cadastro-cliente.html\">Cadastrar novo cliente</a>";
                }
			   	    }

			      mysqli_close($conexao);
			   	  ?>
          </td>
        </tr>
      </table>
    </table>
  </body>
</html>          