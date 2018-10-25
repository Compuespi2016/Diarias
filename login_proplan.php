<!DOCTYPE html>
<html>
<head>
	<title>Login PROP</title>

	<?php
		$erro = (isset($_GET['erro'])) ? $_GET['erro'] : null;
		include_once "cabecalho_proplan.php";
	?>

</head>
<body>
	<center>

		<h1 id="titulo_principal">Login PROPLAN</h1>

		<form method="post" action="conecta_proplan.php">
			<br>
			<div id="dados_login" class="border rounded bg-light">
				<?php
					if($erro == true){
				?>
					<div id="alerta_erro_login" class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Matricula ou Senha Errada</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php
					}
				?>

				<div class="form-group">
					<label for="exampleInputMatricula1">Usuário</label>
				    <input type="text" name="nUsuario" class="form-control" id="exampleInputMatricula1" placeholder="Ex: teste" required="">
				</div>
				<div class="form-group">
				    <label for="exampleInputSenha1">Senha</label>
				    <input type="password" name="nSenha" class="form-control" id="exampleInputSenha1" required="">
				</div>
				<button type="submit" class="btn btn-primary">Acessar</button>
			</div>
		</form>
	</center>
</body>
</html>