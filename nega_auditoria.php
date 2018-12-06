<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"UPDATE ARQUIVOS SET VALIDACAO = 'Negado - Auditoria', JUSTIFICATIVA = '$_POST[nJust]' WHERE ID_SOLICITACAO = '$cod_sol'");

	header("Location: lista_solicitacoes_auditoria.php?nega=true");

	mysqli_close($conexao);
?>