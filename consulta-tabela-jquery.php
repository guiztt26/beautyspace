<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("localhost", "root", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js">
	JQuery(function($){
		$(document).ready(function() {
    		$('#example').DataTable();
		} );
	} );
</script>


<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Telefone Celular</th>
			<th>E-mail</th>
		</tr>
	</thead>
	<tbody>
	<?php

		$query = "SELECT nome_completo, telefone_celular, emai FROM cliente";
		$result1 = mysqli_query($conexao, $query);

		echo "<tr>";

		while($cliente = mysqli_fetch_assoc($result1))
		{
			echo "<td>mysqli_fech_assoc(result1)['nome_completo']</tr>";
			echo "<td>mysqli_fech_assoc(result1)['telefone_celular']</tr>";
			echo "<td>mysqli_fech_assoc(result1)['email']</tr>";
		}

		echo "</tr>";

		mysqli_close($conexao);
	?>
	</tbody>
</table>