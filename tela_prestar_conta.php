<!DOCTYPE html>
<html>
<head>
	<title>Prestação de Conta</title>
	<?php include_once "cabecalho.php";?>
</head>
<body>
	<center>
	<h1 id="titulo_principal">Envio de Arquivos</h1>
	<?php
		$cod_sol = $_GET["id"];
	?>

	<form enctype="multipart/form-data" action="upload.php?id=<?php echo $aux['$cod_sol'] ?>" method="post">
		
		<h3> Solicitação nº: <?php echo $cod_sol ?> </h3>
		
		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Transporte</b></h3>

			<div class="input-group mb-3">
			  <div class="file">
			    <input name="Arq01" required type="file"/>
			  </div>
			</div>
		</fieldset>

		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Hospedagem</b></h3>
			<div class="input-group mb-3">
			  <div class="file">
			    <input name="Arq02" required type="file"/>
			  </div>
			</div>
		</fieldset>

		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Alimentação</b></h3>
			<div class="input-group mb-3">
			  <div class="file">
			    <input name="Arq03" required type="file"/>
			  </div>
			</div>
		</fieldset>

		<input class="btn btn-primary" type="submit" value="Enviar Arquivos" >	
		
	</form>

	<br>

	</center>
</body>
</html>