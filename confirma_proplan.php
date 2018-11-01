<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<body>
	<?php 
	include_once("conexao.php");

	$cod_sol = $_GET["id"];

	mysqli_query($conexao,"UPDATE SOLICITACAO SET VALIDACAO = 'Confirmado' WHERE COD_SOLICITACAO = '$cod_sol'");

	$array_s = mysqli_fetch_array(mysqli_query($conexao,"SELECT * FROM SOLICITACAO WHERE COD_SOLICITACAO = '$cod_sol'"));

	echo $array_s["MAT_SOLICITANTE"];

	mysqli_query($conexao,"UPDATE CADASTRADOS SET QTD_SOLICITACAO_CONFIRMADA = QTD_SOLICITACAO_CONFIRMADA + 1 WHERE MATRICULA = '$array_s[MAT_SOLICITANTE]'");

	header("Location: lista_solicitacoes_proplan.php?confirma=true");

	mysqli_close($conexao);
?>
</body>
</html>

