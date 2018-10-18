<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php
		$erro = (isset($_GET['erro'])) ? $_GET['erro'] : null;
		include_once "cabecalho.php";
	?>

</head>
<body>
	<center>

		<h1>Login</h1>

		<form method="post" action="conecta_usuario.php" style="width: 30%;text-align: left; padding-top: 30px;">

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

			<div class="form-group">
				<label for="exampleInputMatricula1">Matricula</label>
			    <input type="text" name="nMatricula" class="form-control" id="exampleInputMatricula1" placeholder="Ex: 0000000" required="">
			</div>
			<div class="form-group">
			    <label for="exampleInputSenha1">Senha</label>
			    <input type="password" name="nSenha" class="form-control" id="exampleInputSenha1" required="">
			</div>
			<button type="submit" class="btn btn-primary">Acessar</button>
		</form>
	</center>
</body>
</html>
