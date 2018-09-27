<!DOCTYPE html>
<html>
<head>
	<title>
		Solicitar Diária
	</title>

	<?php
		include_once "cabecalho.php";

	?>

	<style type="text/css">
		fieldset{
			width: 50%;
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
			<legend><h3>Dados bancários</h3></legend>
		
			<label>Código do Banco: </label>
			<input type="text" name="nCodigoDoBanco">

			<br>
			<br>

			<label>Nome do Banco: </label>
			<input type="text" name="nNomeDoBanco" size="35">

			<br>
			<br>

			<label>Código da Agência: </label>
			<input type="text" name="nCodigoDaAgencia"><br>
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Evento</h3></legend>
			
			<label>Nome do Evento: </label>
			<input type="text" name="nNomeDoEvento" size="39">

			<br>
			<br>
		
			<label>Local e Periodo do Evento: </label>
			<input type="text" name="nLocalEPeriodoDoEvento" size="35">

			<br>
			<br>

			<label>Abrangência do Evento: </label>
			<br>
			<input type="radio" name="abrangenciaDoEvento" value="Internacional" checked>Internacional &nbsp;
  			<input type="radio" name="abrangenciaDoEvento" value="Nacional">Nacional &nbsp;
  			<input type="radio" name="abrangenciaDoEvento" value="Regional">Regional
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Dados do Trabalho</h3></legend>
			<label>Titulo do Trabalho: </label>
			<input type="text" name="TituloDoTrabalho" size="35">

			<br>
			<br>

			<label>Titulo do Projeto cadastrado na PROP: </label>
			<input type="text" name="TituloDoProjetoCadastradoNaProp" size="65"><br>
		</fieldset>

		<br>

		<fieldset>
			<legend><h3>Informações sobre Auxilio</h3></legend>
			<label>Recebeu Auxilio nos Anos Anteriores</label>
			<input type="radio" name="RecebeuAuxilioAnosAnteriores" value="SIM" checked>SIM &nbsp;&nbsp;&nbsp;
  			<input type="radio" name="RecebeuAuxilioAnosAnteriores" value="NÃO">NÃO
  			<br>
  			<br>
  			<label>em caso afirmativo indique quantos anos: </label>&nbsp;
			<input type="text" name="IndicativoAnos" size="10">

			<br>
			<br>
		

			<label>Auxilio Solicitado</label>
			<input type="radio" name="AuxilioSolicitado" value="Passagem" checked>Passagem &nbsp;&nbsp;&nbsp;
  			<input type="radio" name="AuxilioSolicitado" value="Diaria">Diaria &nbsp;&nbsp;&nbsp;
  			<input type="radio" name="AuxilioSolicitado" value="AjudaFinanceira"> Ajuda Financeira
  			
  			<br>
  			<br>
  			
  			<label>Descrição: </label>
  			<br>
  			<textarea name="Descricao" rows="10" cols="60"></textarea><br>
		</fieldset>

		<br>
		<input type="submit" style="width: 100px; height: 40px">
		<br>

	</form>
	</center>
</body>
</html>