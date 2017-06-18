<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysqli_connect("", "", "") or die("Não foi possível estabelecer conexão com o servidor");

mysqli_set_charset($conexao, 'utf8');

mysqli_select_db($conexao, '') or die("Não foi possível acessar o banco de dados");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome_completo'])) 
{
	$cpf_cliente = $_POST['cpf_cliente'];
	$nome_completo = $_POST['nome_completo'];
	$rg = $_POST['rg'];
	$email = $_POST['email'];
	$data_nascimento = $_POST['data_nascimento'];
	$telefone_fixo = $_POST['telefone_fixo'];
	$telefone_movel = $_POST['telefone_movel'];
	$facebook = $_POST['facebook'];
	$estado_civil = $_POST['estado_civil'];
	$sexo = $_POST['sexo'];
	$profissao = $_POST['profissao'];
	$cep = $_POST['cep'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$query = "UPDATE cliente SET 
				nome_completo = '$nome_completo',
				rg = '$rg',
				email = '$email',
				data_nascimento = '$data_nascimento',
				telefone_fixo = '$telefone_fixo',
				telefone_movel = '$telefone_movel',
				facebook = '$facebook',
				estado_civil = '$estado_civil',
				sexo = '$sexo',
				profissao = '$profissao',
				cep = '$cep',
				complemento = '$complemento',
				numero = '$numero'
				WHERE cpf_cliente = '$cpf_cliente'";	

	if (mysqli_query($conexao, $query)) 
	{
		header("location:http://beautyspace.hol.es/consultar-clientes/");
	} 
	else 
	{
		$erro = "Erro: " . mysqli_error($conexao);
	}
} 
else 
{
	$id = $_GET['id'];

	$query = "SELECT * FROM cliente WHERE cpf_cliente = '$id'";

	$result = mysqli_query($conexao, $query);

	$cliente = mysqli_fetch_assoc($result);
}

?>

<form name="cadastrar" method="post" action="http://beautyspace.hol.es/alterar-cadastro-do-cliente/" id="cadastrar">
	<table>
		<tr>
			<td><input name="cpf_cliente" type="hidden" id="cpf_cliente" size="100" maxlength="11" value="<?php echo $cliente['cpf_cliente'] ?>"></td>
		</tr>
		<tr>
			<td width="157"><font><strong>Nome:</strong></font></td>
			<td width="240"><input name="nome_completo" type="text" id="nome_completo" size="100" maxlength="48" value="<?php echo $cliente['nome_completo'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>RG:</strong></font></td>
			<td><input name="rg" type="text" id="rg" size="100" maxlength="11" value="<?php echo $cliente['rg'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Data Nasc:</strong></font></td>
			<td><input name="data_nascimento" type="date" id="data_nascimento" size="100" maxlength="4" value="<?php echo $cliente['data_nascimento'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Sexo:</strong></font></td>
			<td><select name="sexo" size="1" id="sexo">
				<option value="F">Feminino</option>
                                <option value="M">Masculino</option>
				</select></td>
		</tr>
		<tr>
			<td><font><strong>Estado Civil:</strong></font></td>
			        <td><select id="estado_civil" name="estado_civil" size="1">
                                <option value="<?php echo $cliente['estado_civil'] ?>"><?php echo $cliente['cep'] ?></option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Viúvo(a)">Viúvo(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Separado(a)">Separado(a)</option>
                                </select></td>
		</tr>
		<tr>
			<td><font><strong>Tel. Fixo:</strong></font></td>
			<td><input name="telefone_fixo" type="text" id="telefone_fixo" size="100" maxlength="13" value="<?php echo $cliente['telefone_fixo'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Tel. Movel:</strong></font></td>
			<td><input name="telefone_movel" type="text" id="telefone_movel" size="100" maxlength="13" value="<?php echo $cliente['telefone_movel'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>email:</strong></font></td>
			<td><input name="email" type="text" id="email" size="100" maxlength="30" value="<?php echo $cliente['email'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Facebook:</strong></font></td>
			<td><input name="facebook" type="text" id="facebook" size="100" maxlength="48" value="<?php echo $cliente['facebook'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Profissao:</strong></font></td>
			<td><input name="profissao" type="text" id="profissao" size="100" maxlength="25" value="<?php echo $cliente['profissao'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>CEP:</strong></font></td>
			<td><input name="cep" type="text" id="cep" size="100" maxlength="8" value="<?php echo $cliente['cep'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Numero:</strong></font></td>
			<td><input name="numero" type="text" id="numero" size="100" maxlength="11" value="<?php echo $cliente['numero'] ?>"></td>
		</tr>
		<tr>
			<td><font><strong>Complemento:</strong></font></td>
			<td><input name="complemento" type="text" id="complemento" size="100" maxlength="40" value="<?php echo $cliente['complemento'] ?>"></td>
		</tr>
	</table>
	<button>Salvar</button>
</form>


<style type="text/css">
select {
width:100%;
}
</style>