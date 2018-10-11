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
			background: rgb(255, 255, 255);
		}

		.list-group :hover{
			cursor: pointer;
			background: #a8a8a8;
		}

	</style>
</head>
<body>

	<div class="container">
		<?php 
			
			include_once("conexao.php");
			$sql_diarias = mysqli_query($conexao, "select * from SOLICITACAO order by COD_SOLICITACAO desc");

			while($aux = mysqli_fetch_assoc($sql_diarias)){
		?>
		<br>
			<?php
				$loc = "diaria.php?cod_solicitacao = ".$aux["COD_SOLICITACAO"];
			?>
		<ul class="list-group" onclick="window.location.href = '<?php echo $loc ?>'">
		  <li class="list-group-item list-group-item-secondary">
			<div class="row">
		    <div class="col-md-4"><?php echo $aux["NOME_EVENTO"];?></div>
		    <div class="col-md-4"><?php echo $aux["ABRANGENCIA"];?></div>
		    <div class="col-md-4"><?php echo $aux["TITULO_TRABALHO"];?></div>
		    <div class="col-md-4"><?php echo $aux["TITULO_PROJETO"];?></div>
		    <div class="col-md-4"><?php echo $aux["LOCAL_EVENTO"];?></div>
		    <div class="col-md-4"><?php echo $aux["INICIO_EVENTO"];?></div>
		    <div class="col-md-4"><?php echo $aux["FIM_EVENTO"];?></div>
		    <div class="col-md-4"><?php echo $aux["VALIDACAO"];?></div>

		  	</div>
		  </li>

		</ul>

	    <?php
			}
			
			
		?>
	</div>


</body>
</html>