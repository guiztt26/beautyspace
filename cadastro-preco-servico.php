<?php
$conexao = mysqli_connect("localhost","root","") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

$id_servico = $_POST["id_servico"];
$preco_servico = $_POST["preco_servico"];
$data_validade = $_POST["rg_funcionario"];

mysqli_query($conexao, "SELECT id_servico FROM preco_servico WHERE id_servico = '$id_servico'");
if(mysqli_affected_rows($conexao) == 0)
{
	mysqli_query($conexao, "INSERT INTO preco_servico VALUES ('$id_servico','$preco_servico','$data_validade')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Preço do serviço cadastrado com sucesso!";
	else
		echo "Erro no cadastro do preço do serviço";
}
else
{
	$dt = mysqli_query($conexao, "SELECT data_validade FROM preco_servico WHERE data_validade > $data_validade");
	if(mysqli_affected_rows($conexao) == 0)
	{
	mysqli_query($conexao, "INSERT INTO preco_aluguel VALUES ('$id_servico','$preco_servico','$data_validade')");
	if(mysqli_affected_rows($conexao) == 1)
		echo "Preço do serviço cadastrado com sucesso!";
	else
		echo "Existe um preço cadastrado com data de validade posterior a tentativa de cadastro. Por favor, cadastre um preço para este serviço com data superior à $dt";
	}
}

mysqli_close($conexao);
?>