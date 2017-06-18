<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<style>
.dataTable td {
    color:#333;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
		$(document).ready(function() {
    		$('#example').DataTable();
		} );
</script>


<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Telefone Celular</th>
			<th>E-mail</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
	<?php

		$query = "SELECT * FROM cliente";
		$result1 = mysqli_query($conexao, $query);

		while($cliente = mysqli_fetch_assoc($result1))
		{
			echo "<tr>";
			echo "<td>{$cliente['nome_completo']}</td>";
			echo "<td>{$cliente['telefone_movel']}</td>";
			echo "<td>{$cliente['email']}</td>";
			echo "<td><a href='http://beautyspace.hol.es/alterar-cadastro-do-cliente?id={$cliente['cpf_cliente']}' class='btn btn-edicao'>Edição</a> <a href='http://beautyspace.hol.es/excluir-cliente?id={$cliente['cpf_cliente']}' class='btn btn-exclusao'>Excluir</a></td>";
			echo "</tr>";
		}

		mysqli_close($conexao);
	?>
	</tbody>
</table>