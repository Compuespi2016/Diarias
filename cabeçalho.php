<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<?php
		include_once "conexao.php";
		session_start();
	?>
</head>
<body>
	<header id="cabecalho">
		<h1>Universidade Estadual do Piauí - UESPI</h1>

		<?php
			if (!isset($_SESSION['nMatricula'])) {
		?>

		<nav>
			<a href="Index.php">Inicio</a>
			<a href="login.php">Login</a>
		</nav>
		<?php
			}
			else{
		?>
		<nav>
			<a href="Index.php">Inicio</a>
			<a href="Solicitar_Diaria.php">Solicitar Diária</a>
			<a href="sair.php">Sair</a>
		</nav>
		<?php
			}
		?>
	</header>
</body>
</html>