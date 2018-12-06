<!DOCTYPE html>
<html>
<head>
	<title>Detalhes da Solicitção</title>

	<meta charset="utf-8">

	<?php
		include_once "cabecalho_auditoria.php";
	?>
</head>
<body>
	<?php
		$sql_dados = mysqli_query($conexao,"SELECT * FROM SOLICITACAO WHERE COD_SOLICITACAO = '$_GET[id]'");

		$sql_array = mysqli_fetch_array($sql_dados);

		$sql_dados_solicitante = mysqli_query($conexao,"SELECT * FROM CADASTRADOS WHERE MATRICULA = '$sql_array[MAT_SOLICITANTE]'");

		$sql_array_solicitante = mysqli_fetch_array($sql_dados_solicitante);

		$dir = "arquivos/";

		$solicitante = $_GET['id'];
		$sql_arquivos = mysqli_query($conexao,"SELECT * FROM ARQUIVOS WHERE ID_SOLICITACAO = '$solicitante'");
		while($aux = mysqli_fetch_assoc($sql_arquivos)){
			$nome_transporte = $aux['TRANSPORTE'];
			$nome_hospedagem = $aux['HOSPEDAGEM'];
			$nome_alimentacao = $aux['ALIMENTACAO'];
		}

	?>

	<center>
		<h1 id="titulo_principal">Detalhes da Solicitação</h1>
		<br>
	
		<h3>Dados de Transporte</h3>
		<fieldset style="text-align: center" id="dados_solicitacao" class="border bg-light rounded">
			<a href=<?php echo $dir.$nome_transporte  ?> download>Transporte</a>
		</fieldset>
			
		<br>
			
		<h3>Dados de Hospedagem</h3>
		<fieldset style="text-align: center" id="dados_solicitacao" class="border bg-light rounded">
			<a href=<?php echo $dir.$nome_hospedagem  ?> download>Hospedagem</a>
		</fieldset>

		<br>
		<h3>Dados de Alimentação</h3>
		<fieldset style="text-align: center" id="dados_solicitacao" class="border bg-light rounded">
			<a href=<?php echo $dir.$nome_alimentacao  ?> download>Alimentação</a>
		</fieldset>
		<br>
			
		<br>
		<a hole="button" class="btn btn-success" href="confirma_auditoria.php?id=<?php echo $solicitante ?>">Confirmar</a>
		&nbsp;&nbsp;&nbsp;
		<a hole="button" class="btn btn-danger" href="justificativa_auditoria.php?id=<?php echo $solicitante ?>">Negar</a>
		<br>
		<br>
	</center>

</body>
</html>