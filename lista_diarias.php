<!DOCTYPE html>
<html>
<head>
	<title>Lista de Diárias</title>
	<meta charset="utf-8">
	<?php
		include_once "cabecalho.php";
	?>
	
</head>
<body>
	<center>
	<h1 id="titulo_principal">Suas Solicitações</h1>
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
		<ul class="list-group" style="text-align: left;">
		  <li class="list-group-item bg-light border rounded">
			<h4><?php echo "Solicitação #".$aux["COD_SOLICITACAO"];?></h4>
			<div class="row">
			    <div class="col-md-6">
			    	<?php echo "Evento: ".$aux["NOME_EVENTO"];?>
			    </div>
			    <div class="col-md-6">
			    	<?php echo "Titulo do Trabalho: ".$aux["TITULO_TRABALHO"];?>
			    </div>
			    <div class="col-md-6">
			    	<?php echo "Titulo do Projeto: ".$aux["TITULO_PROJETO"];?>
			    </div>
			    <div class="col-md-6">
			    	<?php echo "Local: ".$aux["LOCAL_EVENTO"];?>
			   	</div>
			    <div class="col-md-6">
			    	<?php echo "Inicio dia: ".date('d/m/Y', strtotime($aux["INICIO_EVENTO"]));;?>
			    </div>
			    <div class="col-md-6">
			    	<?php echo "Término dia: ".date('d/m/Y', strtotime($aux["FIM_EVENTO"]));?>
			    </div>
			    <div class="col-md-6">
			    	<?php echo "Status: ".$aux["VALIDACAO"];?>
			    </div>
		  	</div>
		  </li>

		</ul>

	    <?php
			}
		?>
	</div>
	</center>

</body>
</html>