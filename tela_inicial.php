<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Tela Inicial</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('_imagens/teste.png');">
	<header id="cabecalho">
		<center>
			<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-light rounded">
				<a class="navbar-brand"><img src="_imagens/logo-1.png"/></a>
			</nav>
		</center>
	</header>
	
	<div class="row d-flex justify-content-center">
	  <div class="col-sm-3" onclick="location.href='login.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">LOGIN</h5>
	        <p class="card-text">Estudante<br>Técnico<br>Docente</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3" onclick="location.href='login_prop.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">PROP</h5>
	        <p class="card-text">Pró-Reitoria de Pesquisa e Pós-Graduação</p>
	      </div>
	    </div>
	  </div>
	</div>
	
	<br>

	<div class="row d-flex justify-content-center">
	  <div class="col-sm-3" onclick="location.href='login_prad.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">PRAD</h5>
	        <p class="card-text">Pró Reitoria de Administração e Recursos Humanos</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3" onclick="location.href='login_proplan.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">PROPLAN</h5>
	        <p class="card-text">A Pró Reitoria de Planejamento e Orçamento</p>
	      </div>
	    </div>
	  </div>
	</div>

	<br>

	<div class="row d-flex justify-content-center">
	  <div class="col-sm-3" onclick="location.href='login_auditoria.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Auditoria Interna</h5>
	        <p class="card-text">Controle dos Pagamantos pela UESPI</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3" onclick="location.href='sobre.php'">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Sobre</h5>
	        <p class="card-text">Mais Informações sobre o programa</p>
	      </div>
	    </div>
	  </div>
	</div>

	<br>

</body>
</html>