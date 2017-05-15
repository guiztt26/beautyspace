<?php

include "includes/conexao.php";

$tipo_aluguel = $_POST["tipo_aluguel"];
$descricao = $_POST["descricao"];
$preco_aluguel = $_POST["preco_aluguel"];
$data_validade = $_POST["dt_validade"];

mysqli_query($conexao, "SELECT tipo_aluguel FROM aluguel WHERE tipo_aluguel = '$tipo_aluguel'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO aluguel (tipo_aluguel, descricao) VALUES ('$tipo_aluguel','$descricao')"); 
	if($result1)
	{
		$id_aluguel = mysqli_insert_id($conexao);
		$result2 = mysqli_query($conexao, "INSERT INTO preco_aluguel (id_aluguel, preco_aluguel, data_validade) VALUES ('$id_aluguel','$preco_aluguel','$data_validade')");
		if($result2)
			echo "Aluguel cadastrado com sucesso!";
		else
		{
			mysqli_query($conexao, "DELETE FROM aluguel WHERE id_aluguel = '$id_aluguel'");
			echo "Erro no cadastro do preço do aluguel";
		}
	}
	else
		echo "Erro no cadastro do Aluguel";
}
else
	echo "Aluguel já cadastrado!";

mysqli_close($conexao);
?>