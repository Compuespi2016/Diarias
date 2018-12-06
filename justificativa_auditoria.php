<!DOCTYPE html>
<html>
<head>
	<title>Justificativa</title>
	<meta charset="utf-8">
	<?php
		include_once "cabecalho_auditoria.php";
	?>
</head>
<body>
	<center>
		<form method="post" action="nega_auditoria.php?id=<?php echo $_GET['id'] ?>">
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group col-md-12">
			  <label for="exampleFormControlTextarea1">Justificativa da Negação:</label>
			  <textarea class="form-control" name="nJust" id="exampleFormControlTextarea1" rows="5"></textarea>
			</div>
		</fieldset>
		<br>
		<input type="submit" class="btn btn-primary" value="Enviar">
		<br>
		<form>
	</center>
</body>
</html>