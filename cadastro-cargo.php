<?php
$conexao = mysqli_connect("localhost","root","") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

$nome_cargo = $_POST["nome_cargo"];
$descricao = $_POST["descricao"];

mysqli_query($conexao, "SELECT nome_cargo FROM cargo WHERE nome_cargo = '$nome_cargo'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO cargo VALUES ('$nome_cargo','$descricao')");
	if(mysql_affected_rows($conexao) == 1)
		echo "Cargo cadastrado com sucesso!";
	else
		echo "Erro no cadastro do Cargo";
}
else
	echo "Cargo já cadastrado!";

mysqli_close($conexao);
?>