<?php
$conexao = mysqli_connect("localhost","root","") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];

mysqli_query($conexao, "SELECT cep FROM endereco WHERE cep = '$cep'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO funcionario VALUES ('$cep','$logradouro','$bairro', '$cidade', '$uf')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Endereço cadastrado com sucesso!";
	else
		echo "Erro no cadastro do Endereço";
}
else
	echo "CEP já cadastrado!";

mysqli_close($conexao);
?>