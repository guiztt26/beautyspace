<?php 

$conexao = mysqli_connect("localhost","root","familias") or die("Não foi possível estabelecer conexão com o servidor");
mysqli_select_db($conexao, 'beautyspace') or die("Não foi possível acessar o banco de dados");

?>