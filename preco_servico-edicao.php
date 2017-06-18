<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipo_servico'])) 
{
	$tipo_servico = $_POST['tipo_servico']; 
	$r1 = mysqli_query($conexao, "SELECT id_servico FROM servico WHERE tipo_servico = '$tipo_servico'");
	$id_preco_servico = $_POST['id_preco_servico'];
	$id_servico = mysqli_fetch_assoc($r1)['id_servico'];
	$preco_servico = $_POST['preco_servico'];
	$data_validade = $_POST['data_validade'];
	$query = "UPDATE preco_servico SET 
				id_preco_servico = '$id_preco_servico',
				id_servico = '$id_servico',
				preco_servico = '$preco_servico',
				data_validade = '$data_validade'
				WHERE id_preco_servico = '$id_preco_servico'";	

	if (mysqli_query($conexao, $query)) 
	{
		header("location:http://beautyspace.hol.es/consulta-de-servicos/");
	} 
	else 
	{
		$erro = "Erro: " . mysqli_error($conexao);
	}
} 
else 
{
	$id = $_GET['id'];

	$query = "SELECT * FROM preco_servico, servico WHERE id_preco_servico = '$id' AND preco_servico.id_servico = servico.id_servico";

	$result = mysqli_query($conexao, $query);

	$servico = mysqli_fetch_assoc($result);
}

?>

<form name="cadastrar" method="post" action="cadastro-preco-servico.php" id="cadastrar">
	<table>
		<tr>
			<td><input name="id_preco_servico" type="hidden" id="id_preco_servico" size="100" maxlength="11" value="<?php echo $servico['id_preco_servico'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Tipo do Serviço:</strong></font></td>
			<td><input name="tipo_servico" type="text" id="tipo_servico" size="100" maxlength="30" value="<?php echo $servico['tipo_servico']?>"></td>
		</tr>
		<tr>
			<td><font><strong>Preço do Serviço: </strong></font></td>
			<td><input name="preco_servico" type="text" id="preco_servico" size="100" maxlength="8" value="<?php echo $servico['preco_servico']?>"></td>
		</tr>
		<tr>
			<td><strong><font>Preço válido até: </font></strong></td>
			<td width="359"><input name="data_validade" type="date" id="data_validade" size="100" maxlength="4" value="<?php echo $servico['data_validade']?>"></td>
		</tr>
	</table>
	<button>Salvar</button>
</form>