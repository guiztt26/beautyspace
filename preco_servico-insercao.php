<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

$tipo_servico = $_POST["tipo_servico"];
$preco_servico = $_POST["preco_servico"];
$data_validade = $_POST["data_validade"];

$servico = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
$id_servico = mysqli_fetch_assoc($servico)['id_servico'];

mysqli_query($conexao, "SELECT id_servico FROM servico WHERE id_servico = '$id_servico'");
if(mysqli_affected_rows($conexao) == 1)
{
	$data = mysqli_query($conexao, "SELECT data_validade FROM preco_servico WHERE data_validade > '$data_validade' and id_servico = '$id_servico'");

	if(mysqli_affected_rows($conexao) == 0)
	{
		$result1 = mysqli_query($conexao, "INSERT INTO preco_servico (id_servico, preco_servico, data_validade) VALUES ('$id_servico','$preco_servico','$data_validade')");
		if($result1)
			echo "Preço do serviço cadastrado com sucesso!";
		else
			echo "Erro no cadastro do preço do serviço";	
	}
	else
	{
				$dt = mysqli_fetch_assoc ($data)['data_validade'];
		echo "Existe um preço cadastrado com data de validade posterior a tentativa de cadastro. Por favor cadastre um preço para este serviço com data superior à $dt";
	}
}
else
	echo "Não existe um serviço cadastrado com este nome. Por favor, verifique se digitou o nome corretamente ou cadastre o serviço desejado.";

mysqli_close($conexao);
?>