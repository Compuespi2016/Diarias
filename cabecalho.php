<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<?php
		include_once "conexao.php";
		session_start();
	?>

</head>
<body>
	<?php
		if (!isset($_SESSION['nMatricula'])) {
	?>
		<header id="cabecalho">
			<center>
				<nav class="navbar navbar-light bg-light">
				  <a class="navbar-brand"><img src="_imagens/logo-1.png"/></a>
				  <nav class="nav">
					<a class="nav-link" href="Index.php">Inicio</a>
					<a class="nav-link" href="login.php">Login</a>
				  </nav>
				</nav>
			</center>
		</header>

	<?php
	}
		else{
	?>

		<header id="cabecalho">
			<center>
				<nav class="navbar navbar-light bg-light">
				  <a class="navbar-brand"><img src="_imagens/logo-1.png"/></a>
				  <nav class="nav">
					<a class="nav-link" href="Index.php">Inicio</a>
					<a class="nav-link" href="Solicitar_Diaria.php">Solicitar Diária</a>
					<a class="nav-link" href="sair.php">Sair</a>
				  </nav>
				</nav>
			</center>
		</header>
	<?php
		}
	?>
</body>
</html>