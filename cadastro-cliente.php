<?php
$conexao = mysqli_connect("localhost","root","familias") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

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
				echo "Cliente cadastrado com sucesso!";
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
			echo "Cliente cadastrado com sucesso!";
		else
			echo "Erro no cadastro do cliente";
	}
	else
		echo "Cliente já cadastrado!";
}

mysqli_close($conexao);
?>