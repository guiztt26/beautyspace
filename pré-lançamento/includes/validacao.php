<?php
session_start();
if (!isset($_SESSION["email"])|| !isset($_SESSION["password"]))
	{
	echo "Efetue login no sistema";
	header ("Location:login.php");
	exit;
	}
	else
	echo "<center> Usuário Logado!<center>";
?>