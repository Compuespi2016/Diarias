<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"UPDATE SOLICITACAO SET VALIDACAO = 'Confirmado' WHERE COD_SOLICITACAO = '$cod_sol'");

	header("Location: lista_solicitacoes.php");

	mysqli_close($conexao);
?>