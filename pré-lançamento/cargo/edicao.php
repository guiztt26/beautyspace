<?php

// Inclui o arquivo de conexão com o banco de dados
include "../includes/conexao.php";
// Verifica se a requisição é do tipo POST  e está setada o índice 'conteudo' no $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome_cargo'])) {
	// Associa os dados recebidos ou da sessão a variáveis
	$id 		= $_POST['id'];
	$nome_cargo = $_POST['nome_cargo'];
	$descricao 	= $_POST['descricao'];
	// Monta o comando SQL para inserir um comentário no banco
	$query = "UPDATE cargo SET 
				nome_cargo = '$nome_cargo',
				descricao = '$descricao'
				WHERE id_cargo = '$id'";	
	// Verifica se o comando foi executado corretamente
	if (mysqli_query($conexao, $query)) {
		// Se sim, o comentário foi cadastrado e o usuário é redirecionado para o index.php
		header("location:index.php");
	} else {
		// Se não, define a variável $erro com o erro ocorrido no MySQL
		$erro = "Erro: " . mysqli_error($conexao);
	}
} else {

	$id = $_GET['id'];

	$query = "SELECT * FROM cargo WHERE id_cargo = '$id'";

	$result = mysqli_query($conexao, $query);

	$cargo = mysqli_fetch_assoc($result);	

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Edição de cargo</h1>
	<form action="edicao.php" method="post">
		<input type="hidden" name="id" value="<?php echo $cargo['id_cargo'] ?>">
		<label for="nome_cargo">Nome</label>
		<input type="text" name="nome_cargo" id="nome_cargo" value="<?php echo $cargo['nome_cargo'] ?>">
		<br>
		<label for="descricao">Descrição</label>
		<textarea name="descricao" id="descricao" rows="5" cols="50" maxlength="150"><?php echo $cargo['descricao'] ?></textarea>
		<button>Salvar</button>
	</form>
			
</body>
</html>