<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lista de Solicitações</title>
	<meta charset="utf-8">

	<?php
		include_once "cabecalho_prop.php";
	?>
</head>
<body>

	<center><h1>Lista de Solicitações</h1></center>
	<br>
	<?php
		$sql_solicitacao = mysqli_query($conexao,"SELECT * FROM SOLICITACAO");
		while($aux = mysqli_fetch_assoc($sql_solicitacao)){
	?>
			<div class="row d-flex justify-content-center">
				<div class="form-group col-md-10">
					<p><?php echo $aux["MAT_SOLICITANTE"]; ?></p>
					<p><?php echo $aux["NOME_EVENTO"]; ?></p>
					<p><?php echo $aux["TIPO_AUXILIO"]; ?></p>
					<a href="detalhe_solicitacao.php?id=<?php echo $aux['COD_SOLICITACAO']?>" >Verificar</a>
				</div>
			</div>
			<br>
	<?php
		}
	?>
</body>
</html>