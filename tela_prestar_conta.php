<!DOCTYPE html>
<html>
<head>
	<title>Prestação de Conta</title>
	<?php include_once "cabecalho.php"; ?>
</head>
<body>
	<center>
	<h1 id="titulo_principal">Envio de Arquivos</h1>

	<form enctype="multipart/from-data" action="upload.php" method="post">
		
		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Transporte</b></h3>

			<div class="input-group mb-3">
			  <div class="custom-file">
			    <input name="imagem" id="Arq01" type="file"/>
			  </div>
			</div>
		</fieldset>

		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Hospedagem</b></h3>
			<div class="input-group mb-3">
			  <div class="custom-file">
			    <input name="imagem" id="Arq01" type="file"/>
			  </div>
			</div>
		</fieldset>

		<fieldset id="dados_solicitacao">
			<h3><b>Contas de Alimentação</b></h3>
			<div class="input-group mb-3">
			  <div class="custom-file">
			    <input name="imagem" id="Arq03" type="file"/>
			  </div>
			</div>
		</fieldset>

		<input class="btn btn-primary" type="submit" value="Enviar Arquivos" >	
		
	</form>

	<br>

	</center>
</body>
</html>