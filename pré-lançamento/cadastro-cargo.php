<?php

include "includes/validacao.php";
include "includes/conexao.php";

$nome_cargo = $_POST["nome_cargo"];
$descricao = $_POST["descricao"];

mysqli_query($conexao, "SELECT nome_cargo FROM cargo WHERE nome_cargo = '$nome_cargo'");
if(mysqli_affected_rows($conexao) == 0)
{
	$result1 = mysqli_query($conexao, "INSERT INTO cargo (nome_cargo, descricao) VALUES ('$nome_cargo','$descricao')");
	if($result1)
		echo "Cargo cadastrado com sucesso!";
	else
		echo "Erro no cadastro do cargo";
}
else
	echo "Cargo já cadastrado!";

mysqli_close($conexao);
?>