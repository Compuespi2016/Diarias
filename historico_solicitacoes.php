<!DOCTYPE html>
<html>
<head>
	<title>Historico de Solicitacoes</title>

	<?php

	if($_GET['org'] == "prop"){
		include_once "cabecalho_prop.php";
	}elseif ($_GET['org'] == "prad") {
		include_once "cabecalho_prad.php";
	}elseif ($_GET['org'] == "proplan") {
		include_once "cabecalho_proplan.php";
	}
	?>

</head>
<body>
	<center>
		<h1 id="titulo_principal">Histórico de Solicitações</h1>
	</center>
	<br>
	
	<div class="d-flex justify-content-center">
		<div class="col-md-11 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
			<div class="row">
				<div class="col-md-3">
					<b>Matricula do Solicitante</b>
				</div>
				<div class="col-md-2">
					<b>Nome do Evento</b>
				</div>
				<div class="col-md-2">
					<b>Tipo do Auxilio</b>
				</div>
				<div class="col-md-3">
					<b>Validação</b>
				</div>
			</div>
		</div>
	</div>

	<br>

	<?php
		$sql_solicitacao = mysqli_query($conexao,"SELECT * FROM SOLICITACAO WHERE VALIDACAO != 'Em Avaliacao: PROP' AND VALIDACAO != 'Em Avaliacao: PRAD' AND VALIDACAO != 'Em Avaliacao: PROPLAN'" );
		while($aux = mysqli_fetch_assoc($sql_solicitacao)){
	?>
			<div class="d-flex justify-content-center">
				<div class="col-md-11 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
					<div class="row">
						<div class="col-md-3">
							<?php echo $aux["MAT_SOLICITANTE"]; ?>
						</div>
						<div class="col-md-2">
							<?php echo $aux["NOME_EVENTO"]; ?>
						</div>
						<div class="col-md-2">
							<?php echo $aux["TIPO_AUXILIO"]; ?>
						</div>
						<div class="col-md-3">
							<?php if ($aux["VALIDACAO"] == "Confirmado") { ?>
								<b><p class="text-success"><?php echo $aux["VALIDACAO"];?></p></b>
							<?php }else { ?>
			    				<b><p class="text-danger"><?php echo $aux["VALIDACAO"];?></p></b>
			    			<?php } ?>
						</div>
						<div class="col-md-1">
							<a role="button" class="btn btn-primary" href="historico_detalhe_solicitacao.php?id=<?php echo $aux['COD_SOLICITACAO']?>&org=<?php echo $_GET['org'] ?>" >Verificar</a>
						</div>
					</div>
				</div>
			</div>
			<br>
	<?php
		}
	?>
</body>
</html>