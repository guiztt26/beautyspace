<?php
$email = $_POST["email"];
$password = $_POST["password"];
?>

<html>
	<head>
	<meta charset="utf-8">
		<title> Autentição de Usuário</title>
	<script = type = "text/javascript">
	function loginsuccessfully()
	{
	setTimeout("window.location='home.php'",1500);
	}
	function loginfailed()
	{
	setTimeout("window.location='login.php'",2500);
	}
	</script>
	</head>
<body>

<?php
if ($email !="" and $password!="")
{

include "includes/conexao.php";

$ip_host = $_SERVER['REMOTE_ADDR'];
$name_host = $_SERVER['REMOTE_ADDR'];
$data_hora = DATE("Y-m-d H:i:sO");
$valida_user = mysqli_query($conexao, "SELECT * FROM tbl_clientes WHERE email_cliente = '$email' and status_cliente ='3' or status_cliente ='2' ");
$valida_user_cont = mysqli_num_rows($valida_user);

if ($valida_user_cont ==0)
{
$falhas_login = mysqli_query($conexao, "SELECT * FROM tbl_logs WHERE log_email = '$email' and Status ='0'AND data_hora>='".DATE("Y-m-d")."'");
$total_falhas = mysqli_num_rows($falhas_login);
	
	if ($total_falhas <3)
	{
	$user = mysqli_query($conexao, "SELECT * FROM tbl_clientes WHERE email_cliente = '$email' and password ='$password'");
	$row = mysqli_num_rows($user);
	
		if ($row >0)
		{
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];
		echo "<h3><center>Autenticado com sucesso. Aguarde um instante para acesso ao sistema...</h3></center>";
		echo "<script>loginsuccessfully()</script>";
		mysqli_query($conexao, "INSERT INTO tbl_logs (log_email, data_hora, ip_host, name_host, Status) VALUE ('$email', '$data_hora', '$ip_host', '$name_host', '1')");
		}
		else
		{
		echo "<h3><center>Erro de autenticação. Usuário ou Senha não conferem.</h3></center>";
		echo "<script>loginfailed()</script>";
		mysqli_query($conexao, "INSERT INTO tbl_logs (log_email, data_hora, ip_host, name_host, Status) VALUE ('$email', '$data_hora', '$ip_host', '$name_host', '0')");
		}
	}
	else
	{	
	mysqli_query($conexao, "UPDATE tbl_clientes SET status_cliente ='3' WHERE email_cliente = '$email'");
	mysqli_query($conexao, "UPDATE tbl_clientes SET data_bloqueio = '".DATE("Y-m-d H:i:sO")."' WHERE email_cliente = '$email'");		
	echo "<h3><center>Usuário temporariamente desativado por excesso de tentativas inválidas</h3></center>";
	echo "<script>loginfailed()</script>";
	}
}
else
{
echo "<h3><center>Usuário temporariamente desativado por excesso de tentativas inválidas. Status BLOQUEADO.</center></h3>";
echo "<script>loginfailed()</script>";
}

}
else
echo "<h3><center>Preencha os dados de usuário e senha</center></h3>";
mysqli_close($conexao);
?>

</body>
</html>

