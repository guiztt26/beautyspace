<?php 

include "../includes/conexao.php";

$query = "SELECT * FROM cargo";

$result = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="cadastro.php">Novo cargo</a>
	<table border="1">
		<tr>			
			<th>Nome</th>
			<th>Descrição</th>
			<th>Ações</th>
		</tr>
		<?php while($cargo = mysqli_fetch_assoc($result)) : ?>
		<tr>			
			<td><?php echo $cargo['nome_cargo'] ?></td>
			<td><?php echo $cargo['descricao'] ?></td>
			<td>
				<a href="exclusao.php?id=<?php echo $cargo['id_cargo'] ?>">Exclusão</a>
				<a href="edicao.php?id=<?php echo $cargo['id_cargo'] ?>">Edição</a>
			</td>
		</tr>
		<?php endwhile; ?>
	</table>		
</body>
</html>