<!DOCTYPE html>
<html>
<head>
	<title>Lista de Diárias</title>
	<meta charset="utf-8">
	<?php
		include_once "cabecalho.php";
	?>
	<link href="grid.css" rel="stylesheet">

	<style type="text/css">
		
		.list-group{
			background: #000000;
		}

	</style>
</head>
<body>

	<div class="container">
		<?php 
			
			include_once("conexao.php");
			$mat = $_SESSION['nMatricula'];
			$sql_diarias = mysqli_query($conexao, "select * from SOLICITACAO where MAT_SOLICITANTE = $mat order by COD_SOLICITACAO desc");
			while($aux = mysqli_fetch_assoc($sql_diarias)){
		?>
		<br>
			<?php
				$loc = "diaria.php?cod_solicitacao = ".$aux["COD_SOLICITACAO"];
			?>
		<ul class="list-group">
		  <li class="list-group-item list-group-item">
			<div class="row">
		    <div class="col-md-6"><?php echo "Evento: ".$aux["NOME_EVENTO"];?></div>
		    <div class="col-md-6"><?php echo "Titulo do Trabalho: ".$aux["TITULO_TRABALHO"];?></div>
		    <div class="col-md-6"><?php echo "Titulo do Projeto: ".$aux["TITULO_PROJETO"];?></div>
		    <div class="col-md-6"><?php echo "Local: ".$aux["LOCAL_EVENTO"];?></div>
		    <div class="col-md-6"><?php echo "Inicio dia: ".date('d/m/Y', strtotime($aux["INICIO_EVENTO"]));;?></div>
		    <div class="col-md-6"><?php echo "Término dia: ".date('d/m/Y', strtotime($aux["FIM_EVENTO"]));?></div>
		    <div class="col-md-6"><?php echo "Status: ".$aux["VALIDACAO"];?></div>

		  	</div>
		  </li>

		</ul>

	    <?php
			}
		?>
	</div>


</body>
</html>