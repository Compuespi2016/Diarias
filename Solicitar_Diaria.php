<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Solicitar Diária</title>

	<meta charset="utf-8">

	<?php
		include_once "cabecalho.php";
	?>

	<script src="js/moment.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		function verifica_data() {
			// body...
			var data_inicio = document.getElementById('inputDataInicioEvento').value;
			var data_fim = document.getElementById('inputDataFimEvento').value;

			if (moment(data_inicio).isAfter(data_fim)) {
				alert("Data de Inicio do Evento nao pode ser maior do que a Data de Fim do Evento :/");
				return false;
			} else {

			}
		}
	</script>

</head>
<body>
	<center>
	<h1 id="titulo_principal">Solicitação</h1>
	<br>

	<form method="post" action="salva_solicitacao.php">
		<h3 id="subtitulo_principal">Dados Pessoais</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group col-md-10">
				<label class="col-sm-5 col-form-label">Nome:</label>
	  			<?php echo $_SESSION['nNome']; ?>
	  		</div>
  			
  			<div class="form-group col-md-10">
				<label class="col-sm-5 col-form-label">Telefone: </label>
  				<?php echo $_SESSION['nTelefone']; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label class="col-sm-5 col-form-label">E-mail: </label>
  				<?php echo $_SESSION['nEmail']; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label class="col-sm-5 col-form-label">Centro: </label>	
  				<?php echo $_SESSION['nCentro']; ?>
			</div>

  			<div class="form-group col-md-10">
  				<label class="col-sm-5 col-form-label">Campus: </label>
  				<?php echo $_SESSION['nCampus']; ?>
			</div>
  		
  			<div class="form-group col-md-10">
  				<label class="col-sm-5 col-form-label">Matrícula: </label>	
  				<?php echo $_SESSION['nMatricula']; ?>
			</div>
			
			<div class="form-group col-md-10">
	  			<label class="col-sm-5 col-form-label">Tipo: </label>
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
		
		<h3>Dados Bancários</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group row col-md-12">
		      <label for="inputState" class="col-sm-5 col-form-label">Selecionar Banco:</label>
		      <select name="nBanco" id="inputState" class="col-sm-7 form-control" required="">
		      	<option selected> </option>
		      	<?php
		      		$sql_bancos = mysqli_query($conexao,"SELECT * FROM BANCO");
		      		while($aux = mysqli_fetch_assoc($sql_bancos)){
		      	?>
		        		<option><?php echo $aux["COD_BANCO"]." - ".$aux["NOME_BANCO"]; ?></option>
		    	<?php } ?>
		      </select>
		    </div>
			
			<div class="form-group row col-md-12">
			    <label for="inputCodigoAgencia" class="col-sm-5 col-form-label">Código da Agência: </label>
			    <input type="text" name="nCodigoDaAgencia" class="col-sm-7 form-control" id="inputCodigoAgencia" placeholder="Ex: 0001-3" required="">
			</div>
			
			<div class="form-group row col-md-12">
			    <label for="inputNumConta" class="col-sm-5 col-form-label">Número da Conta: </label>
			    <input type="text" name="nNumConta" class="col-sm-7 form-control" id="inputNumConta" placeholder="Ex: 0000012" required="">
			</div>
		</fieldset>

		<br>
		<h3>Dados do Evento</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group row col-md-12">
			    <label for="inputNomeEvento" class="col-sm-5 col-form-label">Nome do Evento: </label>
			    <input type="text" name="nNomeDoEvento" class="col-sm-7 form-control" id="inputNomeEvento" placeholder="Ex: ENUCOMP" required="">
			</div>

			<div class="form-group row col-md-12">
			    <label for="inputLocalEvento" class="col-sm-5 col-form-label">Local do Evento: </label>
			    <input type="text" name="nLocalDoEvento" class="col-sm-7 form-control" id="inputLocalEvento" placeholder="Ex: Ufpi - parnaíba" required="">
			</div>

  			<div class="form-group row col-md-12">
			    <label for="inputDataInicioEvento" class="col-sm-5 col-form-label">Data de Início: </label>
			    <input type="date" name="nInicioEvento" class="col-sm-7 form-control" id="inputDataInicioEvento" min="<?php echo date('Y-m-d',strtotime('+30 days')	); ?>" required="">
			</div>

  			<div class="form-group row col-md-12">
			    <label for="inputDataFimEvento" class="col-sm-5 col-form-label">Data de Fim: </label>
			    <input type="date" name="nFimEvento" class="col-sm-7 form-control" id="inputDataFimEvento"  min="<?php echo date('Y-m-d',strtotime('+30 days')	); ?>" required="">
			</div>	
			
			<div class="form-group row col-md-12">
			    <label for="inputAbrangenciaDoEvento" class="col-sm-5 col-form-label">Abrangência do evento: </label>
			    <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="nAbrangenciaDoEvento" id="inputAbrangenciaDoEvento" value="Internacional" required="">
				  <label class="form-check-label" for="inputAbrangenciaDoEvento">Internacional</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="nAbrangenciaDoEvento" id="inputAbrangenciaDoEvento" value="Nacional" required="">
				  <label class="form-check-label" for="inputAbrangenciaDoEvento">Nacional</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="nAbrangenciaDoEvento" id="inputAbrangenciaDoEvento" value="Regional" required="">
				  <label class="form-check-label" for="inputAbrangenciaDoEvento">Regional</label>
				</div>
			</div>
		</fieldset>

		<br>
		<h3>Dados do Trabalho</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group row col-md-12">
			    <label for="inputTituloDoTrabalho" class="col-sm-5 col-form-label">Titulo do Trabalho: </label>
			    <input type="text" name="TituloDoTrabalho" class="col-sm-7 form-control" id="inputTituloDoTrabalho" required="">
			</div>

			<div class="form-group row col-md-12">
			    <label for="inputTituloDoTrabalhoCadastradoProp" class="col-sm-5 col-form-label">Titulo do Projeto cadastrado na PROP: </label>
			    <input type="text" name="TituloDoProjetoCadastradoNaProp" class="col-sm-7 form-control" id="inputTituloDoTrabalhoCadastradoProp" required="">
			</div>
		</fieldset>

		<br>
		<h3>Outras Informações</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">		
			<div class="form-group row col-md-10">
				<label for="inputAuxilioSolicitado" class="col-sm-4 col-form-label">Auxilio Solicitado: </label>

				<?php
					if($_SESSION['nTipo'] == "D" || $_SESSION['nTipo'] == "T"){
				?>
				
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="Passagem" required="">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Passagem</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="Diaria" required="">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Diaria</label>
				</div>

	  			<?php
	  				}else{
	  			?>
				
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="AuxilioSolicitado" id="inputAuxilioSolicitado" value="AjudaFinanceira" required="">
				  <label class="form-check-label" for="inputAuxilioSolicitado">Ajuda Financeira</label>
				</div>

	  			<?php
	  				}
	  			?>
	  		</div>
  			
  			<div class="form-group col-md-12">
			  <label for="exampleFormControlTextarea1">Descrição/Justificativa do Auxilio:</label>
			  <textarea class="form-control" name="nDesc" id="exampleFormControlTextarea1" rows="5"></textarea>
			</div>
		
		</fieldset>

		<br>
		<input class="btn btn-primary" type="submit" value="Enviar Solicitação" onclick="return verifica_data()">
		<br>
		<br>
	</form>
	</center>
</body>
</html>