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
			<th>Serviço</th>
			<th>Preço</th>
		</tr>
	</thead>
	<tbody>
	<?php

		$query = "SELECT DISTINCT servico.tipo_servico, preco_servico.preco_servico FROM servico, preco_servico WHERE servico.id_servico = preco_servico.id_servico AND preco_servico.data_validade > curdate() ORDER BY preco_servico.data_validade" ;
		$result1 = mysqli_query($conexao, $query);

		while($servico = mysqli_fetch_assoc($result1))
		{
			echo "<tr>";
			echo "<td>{$servico['tipo_servico']}</td>";
			echo "<td>{$servico['preco_servico']}</td>";
			echo "</tr>";
		}

		mysqli_close($conexao);
	?>
	</tbody>
</table>