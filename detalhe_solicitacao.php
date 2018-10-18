<!DOCTYPE html>
<html>
<head>
	<title>Detalhes da Solicitção</title>

	<meta charset="utf-8">

	<?php
		include_once "cabecalho_prop.php";
	?>
</head>
<body>
	<?php
		$sql_dados = mysqli_query($conexao,"SELECT * FROM SOLICITACAO WHERE COD_SOLICITACAO = '$_GET[id]'");

		$sql_array = mysqli_fetch_array($sql_dados);

		$sql_dados_solicitante = mysqli_query($conexao,"SELECT * FROM CADASTRADOS WHERE MATRICULA = '$sql_array[MAT_SOLICITANTE]'");

		$sql_array_solicitante = mysqli_fetch_array($sql_dados_solicitante);
	?>

	<fieldset>
			<legend><h3>Dados Pessoais</h3></legend>
			
			<div class="form-group col-md-10">
				<label>Nome:</label>
	  			<?php echo $sql_array_solicitante["NOME"]; ?>
	  		</div>
  			
  			<div class="form-group col-md-10">
				<label>Telefone: </label>
  				<?php echo $sql_array_solicitante["TELEFONE"]; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label>E-mail: </label>
  				<?php echo $sql_array_solicitante["EMAIL"]; ?>
  			</div>
  			
  			<div class="form-group col-md-10">
  				<label>Centro: </label>	
  				<?php echo $sql_array_solicitante["CENTRO"]; ?>
			</div>

  			<div class="form-group col-md-10">
  				<label>Campus: </label>
  				<?php echo $sql_array_solicitante["CAMPUS"]; ?>
			</div>
  		
  			<div class="form-group col-md-10">
  				<label>Matrícula: </label>	
  				<?php echo $sql_array_solicitante["MATRICULA"]; ?>
			</div>
			
			<div class="form-group col-md-10">
	  			<label>Tipo: </label>
	  			<?php
	  				if ($sql_array_solicitante["TIPO"] == 'D'){
	  					echo "Docente";
	  				}
	  				if ($sql_array_solicitante["TIPO"] == 'T'){
	  					echo "Tecnico";
	  				}
	  				if ($sql_array_solicitante["TIPO"] == 'E'){
	  					echo "Estudante";
	  				}
	  			?>
	  		</div>
		</fieldset>

		<fieldset>
			<legend><h3>Dados Bancários</h3></legend>
			<div class="form-group row col-md-10">
		      <label for="inputState" class="col-sm-5 col-form-label">Banco:</label>
		      <?php echo $sql_array["COD_NOME_BANCO"] ?>
		    </div>
			
			<div class="form-group row col-md-10">
			    <label for="inputCodigoAgencia" class="col-sm-5 col-form-label">Código da Agência: </label>
			    <?php echo $sql_array["COD_AGENCIA"] ?>
			</div>
			
			<div class="form-group row col-md-10">
			    <label for="inputNumConta" class="col-sm-5 col-form-label">Número da Conta: </label>
			    <?php echo $sql_array["NUM_CONTA"] ?>
			</div>
		</fieldset>

		<fieldset>
			<legend><h3>Dados do Evento</h3></legend>
			
			<div class="form-group row col-md-10">
			    <label for="inputNomeEvento" class="col-sm-5 col-form-label">Nome do Evento: </label>
			    <?php echo $sql_array["NOME_EVENTO"] ?>
			</div>

			<div class="form-group row col-md-10">
			    <label for="inputLocalEvento" class="col-sm-5 col-form-label">Local do Evento: </label>
			    <?php echo $sql_array["LOCAL_EVENTO"] ?>
			</div>

  			<div class="form-group row col-md-10">
			    <label for="inputDataInicioEvento" class="col-sm-5 col-form-label">Data de Início: </label>
			    <?php echo $sql_array["INICIO_EVENTO"] ?>
			</div>

  			<div class="form-group row col-md-10">
			    <label for="inputDataFimEvento" class="col-sm-5 col-form-label">Data de Fim: </label>
			    <?php echo $sql_array["FIM_EVENTO"] ?>
			</div>	
			
			<div class="form-group row col-md-10">
			    <label for="inputAbrangenciaDoEvento" class="col-sm-4 col-form-label">Abrangência do evento: </label>
			    <?php echo $sql_array["ABRANGENCIA"] ?>
			</div>
		</fieldset>

		<fieldset>
			<legend><h3>Dados do Trabalho</h3></legend>
			<div class="form-group row col-md-10">
			    <label for="inputTituloDoTrabalho" class="col-sm-5 col-form-label">Titulo do Trabalho: </label>
			    <?php echo $sql_array["TITULO_TRABALHO"] ?>
			</div>

			<!--
			<label>Titulo do Projeto cadastrado na PROP: </label>
			<input type="text" name="TituloDoProjetoCadastradoNaProp" size="65" required=""><br>
			-->

			<div class="form-group row col-md-10">
			    <label for="inputTituloDoTrabalhoCadastradoProp" class="col-sm-5 col-form-label">Titulo do Projeto cadastrado na PROP: </label>
			    <?php echo $sql_array["TITULO_PROJETO"] ?>
			</div>

		</fieldset>

		<fieldset>		
			
			<div class="form-group row col-md-10">
				<!--
				<label>Auxilio Solicitado: </label>
				-->
				<label for="inputAuxilioSolicitado" class="col-sm-4 col-form-label">Auxilio Solicitado: </label>

				<?php echo $sql_array["TIPO_AUXILIO"] ?>
	  		</div>
  			
  			<div class="form-group col-md-10">
			  <label for="exampleFormControlTextarea1">Descrição do Projeto: </label>
			  <?php echo $sql_array["DESCRICAO"] ?>
			</div>
		
		</fieldset>

		<a href="confirma.php?id=<?php echo $sql_array['COD_SOLICITACAO']?>">Confirmar</a>
		<a href="nega.php?id=<?php echo $sql_array['COD_SOLICITACAO']?>">Negar</a>
</body>
</html>