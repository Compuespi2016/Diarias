<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<?php
		include_once "cabecalho.php";

		$sucesso = (isset($_GET['sucesso'])) ? $_GET['sucesso'] : null;
		$certo = (isset($_GET['deu_certo'])) ? $_GET['deu_certo'] : null;
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

				<?php
					if($sucesso == true){
				?>

				<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 350px">
				  <strong>Usuário Logado com Sucesso</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

				<?php } ?>

				<?php
					if($certo == true){
				?>

				<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 350px">
				  <strong>Solicitação Feita com Sucesso</strong>
				  <strong>Aguarde a Confirmação</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

				<?php } ?>
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
