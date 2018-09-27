<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<?php
		include_once "cabeçalho.php";
	?>

</head>
<body>
	<?php
		if (!isset($_SESSION['nMatricula'])) {
	?>

			<center>
				<br>
				<br>
				<br>
				<h1>solicitação de diarias</h1>
				<br>
				<h4>clique em login para acessar</h4>
			</center>

	<?php
	}
		else{
	?>

			<center>
				<br>
				<br>
				<br>
				<h1>Bem-vindo</h1>
				<br>
				<h4>clique em solicitar diaria para fazer</h4>
			</center>

	<?php
		}
	?>
</body>
</html>