<?php

	include_once("conexao.php");

	$solicitante = $_GET['id'];

	echo $solicitante;

	mysqli_query($conexao, "UPDATE ARQUIVOS SET VALIDACAO = 'Confirmada' WHERE ID_SOLICITACAO = '$solicitante'");
?>

<script style="" type="text/javascript"> alert('Confirmado!');</script>

<?php
	header('Location: lista_solicitacoes_auditoria.php');
?>
