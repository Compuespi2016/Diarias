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
			    	<?php if ($aux["VALIDACAO"] == "Confirmado") { ?>
			    		<b><p class="text-success"><?php echo "Status: ".$aux["VALIDACAO"];?></p></b>
			    	<?php }elseif ($aux["VALIDACAO"] == "Negado - PROP" || $aux["VALIDACAO"] == "Negado - PRAD" || $aux["VALIDACAO"] == "Negado - PROPLAN") { ?>
			    		<b><p class="text-danger"><?php echo "Status: ".$aux["VALIDACAO"];?></p></b>
			    		<?php echo "Justificativa: ".$aux["JUSTIFICATIVA"];?>
			    	<?php }else { ?>
			    		<b><p class="text-warning"><?php echo "Status: ".$aux["VALIDACAO"];?></p></b>
			    	<?php } ?>
			    </div>
		  	</div>
		  	<div>
						    <a role="button" class="btn btn-primary" href="tela_prestar_conta.php?id=<?php echo $aux['COD_SOLICITACAO'] ?>">Prestar Contas</a>

						    <a style="position: right;" role="button" class="btn btn-danger" href="cancela_solicitacao.php?id=<?php echo $aux['COD_SOLICITACAO'] ?>">Remover Solicitação</a>
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