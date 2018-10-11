<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> Solicitar Diária </title>

	<meta charset="utf-8">

	<?php
		include_once "cabecalho.php";

	?>

	<style type="text/css">
		fieldset{
			width: 60%;
			text-align: left;
		}
	</style>
</head>
<body>
	<center>
	<h1>Solicitação</h1>
	<form method="post" action="salva_solicitacao.php" style="width: 110%;">
		<fieldset>
			<legend><h3>Dados Pessoais</h3></legend>
			
			<div class="form-group col-md-10">
				<label>Nome:</label>
	  			<?php echo $_SESSION['nNome']; ?>
	  		</div>
  			
  			<div class="form-group col-md-10">
				<label>Telefone: </label>
  				<?php echo $_SESSION['nTelefone']; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label>E-mail: </label>
  				<?php echo $_SESSION['nEmail']; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label>Centro: </label>	
  				<?php echo $_SESSION['nCentro']; ?>
			</div>

  			<div class="form-group col-md-10">
  				<label>Campus: </label>
  				<?php echo $_SESSION['nCampus']; ?>
			</div>
  		
  			<div class="form-group col-md-10">
  				<label>Matrícula: </label>	
  				<?php echo $_SESSION['nMatricula']; ?>
			</div>
			
			<div class="form-group col-md-10">
	  			<label>Tipo: </label>
	  			<?php
	  				if ($_SESSION['nTipo'] == 'D'){
	  					echo "Docente";
	  				}
	  				if ($_SESSION['nTipo'] == 'T'){
	  					echo "Tecnico";
	  				}
	  				if ($_SESSION['nTipo'] == 'E'){
	  					echo "Estudante";
	  				}

	  			?>
	  		</div>
		</fieldset>
		
		<br>
		
		<fieldset>
			<legend><h3>Dados Bancários</h3></legend>
			<div class="form-group row col-md-10">
		      <label>Banco:</label>
		     
		      	<option selected> </option>
		      	<?php
		      		include_once("conexao.php");
		      		$cod_solicitacao = $_GET['cod_solicitacao'];
		      		$sql = mysqli_query($conexao,"SELECT * FROM BANCO WHERE COD_SOLICITACAO = '$cod_solicitacao'");
		      		while($aux = mysqli_fetch_assoc($sql)){
		      			?>
		      			<div class="row">
		    			<div class="col-md-4"><?php echo $aux["NOME_EVENTO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["ABRANGENCIA"];?></div>
		    			<div class="col-md-4"><?php echo $aux["TITULO_TRABALHO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["TITULO_PROJETO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["LOCAL_EVENTO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["INICIO_EVENTO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["FIM_EVENTO"];?></div>
		    			<div class="col-md-4"><?php echo $aux["VALIDACAO"];?></div>
		        		
		    	<?php } ?>
		      </select>
		    </div>
			
			<div class="form-group row col-md-10">
			    <label>Código da Agência: </label>
			    
			</div>
			
			<div class="form-group row col-md-10">
			    <label >Número da Conta: </label>
			    
			</div>
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Evento</h3></legend>
			
			<div class="form-group row col-md-10">
			    <label>Nome do Evento: </label>
			    
			</div>

			<div class="form-group row col-md-10">
			    <label>Local do Evento: </label>
			    
			</div>

  			<div class="form-group row col-md-10">
			    <label>Data de Início: </label>
			
			</div>

  			<div class="form-group row col-md-10">
			    <label>Data de Fim: </label>
			    
			</div>	
			
			<div class="form-group row col-md-10">
			    <label >Abrangência do evento: </label>
			    <div class="form-check form-check-inline">
				  
				
			</div>
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Trabalho</h3></legend>
			<div class="form-group row col-md-10">
			    <label>Titulo do Trabalho: </label>
			    
			</div>

			<!--
			<label>Titulo do Projeto cadastrado na PROP: </label>
			<input type="text" name="TituloDoProjetoCadastradoNaProp" size="65" required=""><br>
			-->

			<div class="form-group row col-md-10">
			    <label>Titulo do Projeto cadastrado na PROP: </label>
		
			</div>

		</fieldset>

		<fieldset>		
			
			<div class="form-group row col-md-10">
				<!--
				<label>Auxilio Solicitado: </label>
				-->
				<label for="inputAuxilioSolicitado" class="col-sm-4 col-form-label">Auxilio Solicitado: </label>

				<?php
					if($_SESSION['nTipo'] == "D" || $_SESSION['nTipo'] == "T"){
				?>
				
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="Passagem">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Passagem</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="Diaria">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Diaria</label>
				</div>

	  			<?php
	  				}else{
	  			?>
				
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="AjudaFinanceira">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Ajuda Financeira</label>
				</div>

	  			<?php
	  				}
	  			?>
	  		</div>
  			
  			<div class="form-group col-md-10">
			  <label>Descrição do Projeto: </label>
			  <!--<textarea class="form-control" name="nDesc" id="exampleFormControlTextarea1" rows="5"></textarea>-->
			</div>
		
		</fieldset>

		

	</form>
	</center>
</body>
</html>