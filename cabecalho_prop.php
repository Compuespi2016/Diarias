<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<?php
		include_once "conexao.php";
		session_start();
	?>

</head>
<body style="background-image: url('_imagens/teste.png');">
	<?php
		if (!isset($_SESSION['nUsuario'])) {
	?>
		<header id="cabecalho">
			<center>
				<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-light rounded">
				  <a class="navbar-brand"><img src="_imagens/logo-1.png"/></a>
				  <nav class="nav">
					<a class="nav-link" href="tela_inicial.php"><b>Voltar à Tela Inicial</b></a
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
				<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-light rounded">
				  <a class="navbar-brand"><img src="_imagens/logo-1.png"/></a>
				  <nav class="nav">
					<a class="nav-link" href="index_prop.php"><b>Inicio</b></a>
					<a class="nav-link" href="lista_solicitacoes.php"><b>Solicitações</b></a>
					<a class="nav-link" href="sair.php"><b>Sair</b></a>
				  </nav>
				</nav>
			</center>
		</header>
	<?php
		}
	?>
</body>
</html>