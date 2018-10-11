<!DOCTYPE html>
<html>
<head>
	<title>Login PROP</title>

	<?php
		$erro = (isset($_GET['erro'])) ? $_GET['erro'] : null;
		include_once "cabecalho.php";
	?>

</head>
<body>
	<center>

		<h1>Login PROP</h1>

		<form method="post" action="conecta_prop.php" style="width: 30%;text-align: left; padding-top: 30px;">

			<?php
				if($erro == true){
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 350px">
				  <strong>Matricula ou Senha Errada</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php
				}
			?>

			<div>
				<label>Usuário: </label>
				<br>
				<input type="text" name="nUsuario" required="">

				<br>
				<br>

				<label>Senha: </label>
				<br>
				<input type="password" name="nSenha" required="">
				
				<br>
				<br>

				<input class="btn btn-primary" type="submit" value="Entrar">
			</div>
		</form>
	</center>
</body>
</html>
