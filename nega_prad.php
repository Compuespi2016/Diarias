<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"UPDATE SOLICITACAO SET VALIDACAO = 'Negado - PRAD', JUSTIFICATIVA = '$_POST[nJust]' WHERE COD_SOLICITACAO = '$cod_sol'");

	header("Location: lista_solicitacoes_prad.php?nega=true");

	mysqli_close($conexao);
?>