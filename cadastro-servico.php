<?php
$conexao = mysqli_connect("localhost","root","") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

$tipo_servico = $_POST["tipo_servico"];
$descricao = $_POST["descricao"];
$preco_servico = $_POST["preco_servico"];
$data_validade = $_POST["rg_funcionario"];

$id_servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'");

mysqli_query($conexao, "SELECT tipo_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO servico VALUES ('$tipo_servico','$descricao')");
	if(mysql_affected_rows($conexao) == 1)
	{
		mysqli_query($conexao, "INSERT INTO preco_servico VALUES ('$id_servico','$preco_servico','$data_validade')");
		if(mysqli_affected_rows($conexao) == 1)
			echo "Serviço cadastrado com sucesso!";
		else
			echo "Erro no cadastro do preço do serviço";
	}
	else
		echo "Erro no cadastro do Serviço";
}
else
	echo "Serviço já cadastrado!";

mysqli_close($conexao);
?>