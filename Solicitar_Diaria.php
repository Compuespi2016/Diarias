<!DOCTYPE html>
<html>
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
	<form method="post" action="salva_solicitacao.php">
		<fieldset>
			<legend><h3>Dados Pessoais</h3></legend>
			
			<label>Nome:</label>
  			<?php echo $_SESSION['nNome']; ?>

  			<br>
  			<br>
  		
			<label>Telefone: </label>
  			<?php echo $_SESSION['nTelefone']; ?>

  			<br>
  			<br>
  		
  			<label>E-mail: </label>
  			<?php echo $_SESSION['nEmail']; ?>

  			<br>
  			<br>
  
  			<label>Centro: </label>	
  			<?php echo $_SESSION['nCentro']; ?>

  			<br>
  			<br>
  		
  			<label>Campus: </label>
  			<?php echo $_SESSION['nCampus']; ?>

  			<br>
  			<br>
  		
  			<label>Matrícula: </label>	
  			<?php echo $_SESSION['nMatricula']; ?>

  			<br>
  			<br>

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
  			
		</fieldset>
		
		<br>
		
		<fieldset>
			<legend><h3>Dados Bancários</h3></legend>
			<!--
			<label>Código do Banco: </label>
			<input type="text" name="nCodigoDoBanco">

			<br>
			<br>

			<label>Nome do Banco: </label>
			<input type="text" name="nNomeDoBanco" size="35">

			<br>
			<br>

			<label>Selecionar Banco:</label>
			<select id="inputState" class="form-control">
		      <option selected>Escolha Banco</option>
		      <option>...</option>
		    </select>
			-->
			<div class="form-group col-md-10">
		      <label for="inputState">Selecionar Banco:</label>
		      <select name="nBanco" id="inputState" class="form-control" required="">
		      	<option selected> </option>
		      	<?php
		      		$sql_bancos = mysqli_query($conexao,"SELECT * FROM BANCO");
		      		while($aux = mysqli_fetch_assoc($sql_bancos)){
		      	?>
		        		<option><?php echo $aux["COD_BANCO"]." - ".$aux["NOME_BANCO"]; ?></option>
		    	<?php } ?>
		      </select>
		    </div>

		    <div class="form-group col-md-10">
			  <label>Código da Agência: </label> &nbsp;&nbsp;
			  <input type="text" name="nCodigoDaAgencia" required="">
			<div>

			<br>	

			<div class="form-group col-md-15">
			  <label>Numero da Conta: </label> &nbsp;&nbsp;
			  <input type="text" name="nNumConta" size="15" required="">
			<div>
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Evento</h3></legend>
			
			<label>Nome do Evento: </label>
			<input type="text" name="nNomeDoEvento" size="39" required="">

			<br>
			<br>
		
			<label>Local do Evento: </label>
			<input type="text" name="nLocalDoEvento" size="35" required="">

			<br>
			<br>

			<label>Inicio do evento: </label> &nbsp;&nbsp;
  			<input type="date" name="nInicioEvento" required="">

  			<br>
  			<br>

  			<label>Fim do evento: </label> &nbsp;&nbsp;
  			<input type="date" name="nFimEvento" required="">

  			<br>
  			<br>	

			<label>Abrangência do Evento: </label> &nbsp;&nbsp;&nbsp;
			<input type="radio" name="nAbrangenciaDoEvento" value="Internacional">Internacional &nbsp;
  			<input type="radio" name="nAbrangenciaDoEvento" value="Nacional">Nacional &nbsp;
  			<input type="radio" name="nAbrangenciaDoEvento" value="Regional">Regional
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Trabalho</h3></legend>
			<label>Titulo do Trabalho: </label>
			<input type="text" name="TituloDoTrabalho" size="35" required="">

			<br>
			<br>

			<label>Titulo do Projeto cadastrado na PROP: </label>
			<input type="text" name="TituloDoProjetoCadastradoNaProp" size="65" required=""><br>
		</fieldset>

		<br>

		<fieldset>		

			<label>Auxilio Solicitado: </label>
			<?php
				if($_SESSION['nTipo'] == "D" || $_SESSION['nTipo'] == "T"){
			?>
			<input type="radio" name="AuxilioSolicitado" value="Passagem">Passagem &nbsp;&nbsp;&nbsp;
  			<input type="radio" name="AuxilioSolicitado" value="Diaria">Diaria &nbsp;&nbsp;&nbsp;
  			<?php
  				}else{
  			?>
  			<input type="radio" name="AuxilioSolicitado" value="AjudaFinanceira"> Ajuda Financeira
  			<?php
  				}
  			?>
  			<br>
  			<br>
  			
  			<!--
  			<label>Descrição: </label>
  			<br>
  			<textarea name="Descricao" rows="10" cols="60"></textarea><br>
  			-->
  			<div class="form-group col-md-10">
			  <label for="exampleFormControlTextarea1">Descrição do Projeto: </label>
			  <textarea class="form-control" name="nDesc" id="exampleFormControlTextarea1" rows="5"></textarea>
			</div>
		</fieldset>

		<br>
		<input type="submit">
		<!-- <input class="btn btn-primary" type="submit" value="Enviar"> -->
		<br>

	</form>
	</center>
</body>
</html>