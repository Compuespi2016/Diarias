<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"DELETE FROM SOLICITACAO WHERE COD_SOLICITACAO = '$cod_sol'");

	header("Location: lista_diarias.php");

	mysqli_close($conexao);
?>