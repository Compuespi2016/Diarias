<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"UPDATE SOLICITACAO SET VALIDACAO = 'Em Avaliação: PROPLAN' WHERE COD_SOLICITACAO = '$cod_sol'");

	header("Location: lista_solicitacoes_prad.php?confirma=true");

	mysqli_close($conexao);
?>
</body>
</html>

