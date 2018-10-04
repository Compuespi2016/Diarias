<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php
		include_once "cabecalho.php";
	?>

</head>
<body>
	<center>

		<h1>Login</h1>

		<form method="post" action="conecta_usuario.php" style="width: 20%;text-align: left; padding-top: 30px;">

			<div>
				<label>Matricula: </label>
				<br>
				<input type="text" name="nMatricula" required="">

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
