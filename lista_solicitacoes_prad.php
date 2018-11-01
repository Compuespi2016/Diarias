<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lista de Solicitações PRAD</title>
	<meta charset="utf-8">

	<?php
		include_once "cabecalho_prad.php";

		$confirma = (isset($_GET['confirma'])) ? $_GET['confirma'] : null;
		$nega = (isset($_GET['nega'])) ? $_GET['nega'] : null;
	?>
</head>
<body>
	<center>

		<?php if($confirma == true){ ?>
			<div id="usuario_logado_sucesso" class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Solicitação Confirmada</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
		<?php
			}
			if($nega == true){
		?>
			<div id="usuario_logado_sucesso" class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Solicitação Negada</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
		<?php
			}
		?>

		<h1 id="titulo_principal">Lista de Solicitações</h1>
	</center>
	<br>
	
	<div class="d-flex justify-content-center">
		<div class="col-md-11 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
			<div class="row">
				<div class="col-md-4">
					<b>Matricula do Solicitante</b>
				</div>
				<div class="col-md-3">
					<b>Nome do Evento</b>
				</div>
				<div class="col-md-3">
					<b>Tipo do Auxilio</b>
				</div>
			</div>
		</div>
	</div>

	<br>

	<?php
		$sql_solicitacao = mysqli_query($conexao,"SELECT * FROM SOLICITACAO WHERE VALIDACAO = 'Em Avaliacao: PRAD'");
		while($aux = mysqli_fetch_assoc($sql_solicitacao)){
	?>
			<div class="d-flex justify-content-center">
				<div class="col-md-11 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
					<div class="row">
						<div class="col-md-4">
							<?php echo $aux["MAT_SOLICITANTE"]; ?>
						</div>
						<div class="col-md-3">
							<?php echo $aux["NOME_EVENTO"]; ?>
						</div>
						<div class="col-md-3">
							<?php echo $aux["TIPO_AUXILIO"]; ?>
						</div>
						<div class="col-md-1">
							<a role="button" class="btn btn-primary" href="detalhe_solicitacao_prad.php?id=<?php echo $aux['COD_SOLICITACAO']?>" >Verificar</a>
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