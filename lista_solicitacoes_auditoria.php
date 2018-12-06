<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Listagem de Solicitações</title>
	<meta charset="utf-8">

	<?php  
		include_once "cabecalho_auditoria.php";

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

		<h1 id="titulo_principal">Listagem de Solicitações</h1>
	</center>

	<br>

	<div class="d-flex justify-content-center">
		<div class="col-md-8 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
			<div class="row">
				<div class="col-md-4">
					<b>Matricula do Solicitante</b>
				</div>
				<div class="col-md-4">
					<b>Numero da Solicitação</b>
				</div>
			</div>
		</div>
	</div>

	<br>

	<?php
		$sql_solicitacao = mysqli_query($conexao,"SELECT * FROM ARQUIVOS WHERE VALIDACAO = 'Em Avaliacao' OR VALIDACAO = 'Negado - Auditoria'");
		while($aux = mysqli_fetch_assoc($sql_solicitacao)){
	?>
			<div class="d-flex justify-content-center">
				<div class="col-md-8 bg-light border rounded" style="border-color: black; border-style: dotted; padding: 10px;">
					<div class="row">
						<div class="col-md-4">
							<?php echo $aux["MATRICULA"]; ?>
						</div>
						<div class="col-md-5">
							<?php echo utf8_encode($aux["ID_SOLICITACAO"]); ?>
						</div>
						<div class="col-md-1">
							<a role="button" class="btn btn-primary" href="detalhe_solicitacao_auditoria.php?id=<?php echo $aux['ID_SOLICITACAO']?>" >Verificar</a>
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