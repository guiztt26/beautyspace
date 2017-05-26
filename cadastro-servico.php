<?php

include "includes/validacao.php";
include "includes/conexao.php";

$tipo_servico = $_POST["tipo_servico"];
$descricao = $_POST["descricao"];
$preco_servico = $_POST["preco_servico"];
$data_validade = $_POST["data_validade"];

mysqli_query($conexao, "SELECT tipo_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO servico (tipo_servico, descricao) VALUES ('$tipo_servico','$descricao')"); 
	if($result1)
	{
		$id_servico = mysqli_insert_id($conexao);
		$result2 = mysqli_query($conexao, "INSERT INTO preco_servico (id_servico, preco_servico, data_validade) VALUES ('$id_servico','$preco_servico','$data_validade')");
		if($result2)
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