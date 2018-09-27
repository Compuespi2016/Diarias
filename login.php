<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php
		include_once "cabecalho.php";
	?>

	<style type="text/css">
		form{
			text-align: center;
			justify-content: center;
			padding-top: 50px;
			padding-left: 300px; 
			text-align: left;
		}

		div{
			
		}
	</style>
</head>
<body>
	<form method="post" action="conecta_usuario.php">
		Matricula:<br>
		<input type="text" name="nMatricula"><br><br>
		
		Senha:<br>
		<input type="password" name="nSenha"><br><br>
		
		<input type="submit" value="Entrar">
	</form>
</body>
</html>
