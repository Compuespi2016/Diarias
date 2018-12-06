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

	<center>
		<h1 id="titulo_principal">Detalhes da Solicitação</h1>
		<br>
	
		<h3>Dados Pessoais</h3>
		<fieldset id="dados_solicitacao" class="border bg-light rounded">
			<div class="form-group col-md-10">
				<label class="col-sm-5 col-form-label">Nome:</label>
		  		<?php echo $sql_array_solicitante["NOME"]; ?>
		  	</div>
	  			
	  		<div class="form-group col-md-10">
				<label class="col-sm-5 col-form-label">Telefone: </label>
	  			<?php echo $sql_array_solicitante["TELEFONE"]; ?>
	  		</div>
	  			
	  		<div class="form-group col-md-10">
	  			<label class="col-sm-5 col-form-label">E-mail: </label>
	  			<?php echo $sql_array_solicitante["EMAIL"]; ?>
	  		</div>
	  			
	  		<div class="form-group col-md-10">
	  			<label class="col-sm-5 col-form-label">Centro: </label>	
	  			<?php echo $sql_array_solicitante["CENTRO"]; ?>
			</div>

	  			<div class="form-group col-md-10">
	  				<label class="col-sm-5 col-form-label">Campus: </label>
	  				<?php echo $sql_array_solicitante["CAMPUS"]; ?>
				</div>
	  		
	  			<div class="form-group col-md-10">
	  				<label class="col-sm-5 col-form-label">Matrícula: </label>	
	  				<?php echo $sql_array_solicitante["MATRICULA"]; ?>
				</div>
				
				<div class="form-group col-md-10">
		  			<label class="col-sm-5 col-form-label">Tipo: </label>
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
			
			<br>
			<h3>Dados Bancários</h3>
			<fieldset id="dados_solicitacao" class="border bg-light rounded">
				<div class="form-group col-md-10">
			      <label for="inputState" class="col-sm-5 col-form-label">Banco:</label>
			      <?php echo $sql_array["COD_NOME_BANCO"] ?>
			    </div>
				
				<div class="form-group col-md-10">
				    <label for="inputCodigoAgencia" class="col-sm-5 col-form-label">Código da Agência: </label>
				    <?php echo $sql_array["COD_AGENCIA"] ?>
				</div>
				
				<div class="form-group col-md-10">
				    <label for="inputNumConta" class="col-sm-5 col-form-label">Número da Conta: </label>
				    <?php echo $sql_array["NUM_CONTA"] ?>
				</div>
			</fieldset>

			<br>
			<h3>Dados do Evento</h3>
			<fieldset id="dados_solicitacao" class="border bg-light rounded">
				<div class="form-group col-md-10">
				    <label for="inputNomeEvento" class="col-sm-5 col-form-label">Nome do Evento: </label>
				    <?php echo $sql_array["NOME_EVENTO"] ?>
				</div>

				<div class="form-group col-md-10">
				    <label for="inputLocalEvento" class="col-sm-5 col-form-label">Local do Evento: </label>
				    <?php echo $sql_array["LOCAL_EVENTO"] ?>
				</div>

	  			<div class="form-group col-md-10">
				    <label for="inputDataInicioEvento" class="col-sm-5 col-form-label">Data de Início: </label>
				    <?php echo $sql_array["INICIO_EVENTO"] ?>
				</div>

	  			<div class="form-group col-md-10">
				    <label for="inputDataFimEvento" class="col-sm-5 col-form-label">Data de Fim: </label>
				    <?php echo $sql_array["FIM_EVENTO"] ?>
				</div>	
				
				<div class="form-group col-md-10">
				    <label for="inputAbrangenciaDoEvento" class="col-sm-5 col-form-label">Abrangência do evento: </label>
				    <?php echo $sql_array["ABRANGENCIA"] ?>
				</div>
			</fieldset>
			
			<br>
			<h3>Dados do Trabalho</h3>
			<fieldset id="dados_solicitacao" class="border bg-light rounded">
				<div class="form-group col-md-10">
				    <label for="inputTituloDoTrabalho" class="col-sm-5 col-form-label">Titulo do Trabalho: </label>
				    <?php echo $sql_array["TITULO_TRABALHO"] ?>
				</div>

				<div class="form-group col-md-10">
				    <label for="inputTituloDoTrabalhoCadastradoProp" class="col-sm-5 col-form-label">Titulo do Projeto cadastrado na PROP: </label>
				    <?php echo $sql_array["TITULO_PROJETO"] ?>
				</div>
			</fieldset>

			<br>
			<h3>Outras Informações</h3>
			<fieldset id="dados_solicitacao" class="border bg-light rounded">		
				<div class="form-group col-md-10">
					<label for="inputAuxilioSolicitado" class="col-sm-5 col-form-label">Auxilio Solicitado: </label>
					<?php echo $sql_array["TIPO_AUXILIO"] ?>
		  		</div>
	  			
	  			<div class="form-group col-md-10">
				  <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Descrição/Justificativa: </label>
				  <?php echo $sql_array["DESCRICAO"] ?>
				</div>
			</fieldset>

			<?php
				if($sql_array["COD_PONTUACAO"] > 0){

					$pontuacao = mysqli_fetch_array(mysqli_query($conexao,"SELECT * FROM PONTUACAO WHERE cod_pontuacao = '$sql_array[COD_PONTUACAO]'"));
			?>

			<br>
			<h3>Formulário de Produção Cientifica do Pesquisador</h3>
		
		<br>
		<fieldset id="dados_solicitacao" style="width: 70%" class="border bg-light rounded">
			<div class="container" >
				<div class="row">
					<div class="col" style="text-align: center;">
					ÁREA DE AVALIAÇÃO
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-6">
						Discriminação 
						(Escore por item) X (Quantidade) = Escore Final
					</div>
					<div class="col-2">
						Escore por item
					</div>
					<div class="col-2">
						Quantidade
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						1
					</div>
					<div class="col-5">
						Doutorado
					</div>
					<div class="col-md-2">
						<input class="form-control" type="text" id="valor" value="30" size = "1"  disabled="disabled"/>
					</div>
					<div class="col-md-2">
						<input class="form-control" type="text" id="total" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_1'] ?>" />
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-1">
						2
					</div>
					<div class="col-5">
						Mestrado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor2" value="15" size = "1"  disabled="disabled"  />
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total2" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_2'] ?>"/>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-1">
						3
					</div>
					<div class="col-5">
						Bolsista de Produtividade em Pesquisa do CNPq
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor3" value="10" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total3" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_3'] ?>"/>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-1">
						4
					</div>
					<div class="col-5">
						Artigos publicados em periódicos científicos indexados 2**
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis A1
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.1" value="10" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total4.1" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_1'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis A2
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.2" value="8" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total4.2" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_2'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis B1, ou trabalho completo publicado em Conferência A1, A2 e B1 (especifico para área de Ciência da Computação)
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.3" value="6" size = "1"  disabled="disabled"  />
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.3" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_3'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis B2, ou trabalho completo publicado em Conferência A1, A2 e B1 (especifico para área de Ciência da Computação)
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.4" value="4" size = "1"  disabled="disabled"  />
					</div>
				
					<div class="col-2">
						<input class="form-control" type="text" id="total4.4" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_4'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis B3, ou trabalho completo publicado em Conferência B2, B3 e B4 (especifico para área de Ciência da Computação)
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.5" value="3" size = "1"  disabled="disabled"  />
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.5" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_5'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis B4; B5
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.6" value="2" size = "1"  disabled="disabled"  />
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.6" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_6'] ?>"/>
					</div>
				</div>


				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						Qualis C
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor4.7" value="1" size = "1"  disabled="disabled"  />
					</div>
				
					<div class="col-2">
						<input class="form-control" type="text" id="total4.7" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_4_7'] ?>"/>
					</div>
				</div>
				<br>

				
				<div class="row">
					<div class="col-1">
						5
					</div>
					<div class="col-5">
						Artigos publicados em periódicos científicos NÃOclassificados pelo sistema QUALIS 3
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor5" value="0.5" size = "1"  disabled="disabled"  />
					</div>
	
					<div class="col-2">
						<input class="form-control" type="text" id="total5" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_5'] ?>"/>
					</div>
				</div>
				<br>


				<div class="row">
					<div class="col-1">
						6
					</div>
					<div class="col-5">
						Trabalhos completos publicados em anais de congressos 4
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						6.1 - Eventos internacionais
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor6.1" value="2" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total6.1" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_6_1'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						6.2 - Eventos nacionais e regionais
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor6.2" value="1" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total6.2" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_6_2'] ?>"/>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						7
					</div>
					<div class="col-5">
						Patente registrada (carta patente)
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor7" value="10" size = "1"  disabled="disabled"  />
					</div>
				
					<div class="col-2">
						<input class="form-control" type="text" id="total7" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_7'] ?>"/>
					</div>
				</div>
				<br>


				<div class="row">
					<div class="col-1">
						8
					</div>
					<div class="col-5">
						Software registrado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor8" value="10" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total8" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_8'] ?>"/>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						9
					</div>
					<div class="col-5">
						Autor/Co-autor de livros publicados com ISBN***
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						9.1 - Livro publicado por editora com conselho editorial, com no mínimo 60 páginas
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor9.1" value="10" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total9.1" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_9_1'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						9.2 - Livro publicado sem conselho editorial, com no mínimo 60 páginas
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor9.2" value="5" size = "1"  disabled="disabled"  />
					</div>
				
					<div class="col-2">
						<input class="form-control" type="text" id="total9.2" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_9_2'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						9.3 - Livro organizado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor9.3" value="5" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total9.3" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_9_3'] ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						9.4 - Capítulo de livro publicado por editora com conselho editorial
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor9.4" value="3" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total9.4" size = "2" disabled="disabled" name="total" value="<?php echo $pontuacao['q_9_4'] ?>"/>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						10
					</div>
					<div class="col-5">
						Projeto de pesquisa com financiamento externo
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						10.1 - Como coordenador
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="valor10.1" value="10" size = "1"  disabled="disabled"  />
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total10.1" size = "2" disabled="disabled" name="total10.1" value="<?php echo $pontuacao['q_10_1'] ?>"/>
					</div>
				</div>


				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						10.2 - Como colaborador
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor10.2" value="5" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" id="total10.2" disabled="disabled" required="" value="<?php echo $pontuacao['q_10_2'] ?>" readonly>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						11
					</div>
					<div class="col-5">
						Projeto de pesquisa com financiamento interno (Editais PIP)
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						11.1 - Como coordenador
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor11.1" value="5" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total11.1" disabled="disabled" required="" value="<?php echo $pontuacao['q_11_1'] ?>" readonly>	
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						11.2 - Como colaborador
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor11.2" value="3" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total11.2" disabled="disabled" required="" value="<?php echo $pontuacao['q_11_2'] ?>" readonly>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						12
					</div>
					<div class="col-5">
						Orientação / Co-orientação (concluída)
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.1 - Orientação de doutorado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.1" value="10" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.1" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_1'] ?>"readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.2 - Orientação de mestrado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.2" value="8" disabled="disabled" readonly>
					</div>
						
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.2" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_2'] ?>" readonly>
					</div>
				</div>


				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.3 - Orientação de iniciação científica 4
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.3" value="4" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.3" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_3'] ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.4 - Orientação de TCC de graduação 4
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.4" value="2" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.4" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_4'] ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.5 - Orientação de iniciação científica júnior 4
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.5" value="0.5" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.5" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_5'] ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.6 - Orientação de monografia de especialização 4
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.6" value="2" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.6" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_6'] ?>"readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						12.7 - Co-orientação de doutorado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor12.7" value="6" disabled="disabled" readonly>
						
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.7" disabled="disabled" required="" value="<?php echo $pontuacao['q_12_7'] ?>"readonly>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-1">
						13
					</div>
					<div class="col-5">
						Participação em bancas de defesa
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						13.1 - Doutorado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor13.1" value="6" disabled="disabled" readonly>
						
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.1" disabled="disabled" required="" value="<?php echo $pontuacao['q_13_1'] ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						13.2 - Qualificação de doutorado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor13.2" value="3" disabled="disabled" readonly>
						
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.2" disabled="disabled" required="" value="<?php echo $pontuacao['q_13_2'] ?>"readonly>
					</div>
				</div>


				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						13.3 - Mestrado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor13.3" value="4" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.3" disabled="disabled" required="" value="<?php echo $pontuacao['q_13_3'] ?>"readonly>
					</div>
				</div>


				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						13.4 - Qualificação de mestrado
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor13.4" value="2" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.4" disabled="disabled" required="" value="<?php echo $pontuacao['q_13_4'] ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
					
					</div>
					<div class="col-5">
						13.5 - TCC/Monografia 4
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor13.5" value="1" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.5" disabled="disabled" required="" value="<?php echo $pontuacao['q_13_5'] ?>" readonly>	
					</div>
				</div>
				<br>


				<div class="row">
					<div class="col-1">
						14
					</div>
					<div class="col-5">
						Membro do Comitê de Ética em Pesquisa da UESPI (por ano de atividade)
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="valor14" value="6" disabled="disabled" readonly>
					</div>
					
					<div class="col-2">
						<input class="form-control" type="text" name="" id="total14" disabled="disabled" value="<?php echo $pontuacao['q_14'] ?>" readonly>
					</div>
				</div>
				</div>	
			<br>

				<div class="row justify-content-center">
					<div class="col-5">
						Resultado final
					</div>
					<div class="col-3">
						<input class="form-control" type="text" name="total" id="mostra_soma" onblur="mostra_resultado('mostra_soma')" value="<?php echo $pontuacao['total'] ?>" readonly>
					</div>
				</div>
			<br>

		</fieldset>
		<br>
			 
			<?php } ?>


			<br>
			<a hole="button" class="btn btn-success" href="confirma.php?id=<?php echo $sql_array['COD_SOLICITACAO']?>">Confirmar</a>
			&nbsp;&nbsp;&nbsp;
			<a hole="button" class="btn btn-danger" href="justificativa.php?id=<?php echo $sql_array['COD_SOLICITACAO']?>">Negar</a>
			<br>
			<br>
	</center>
</body>
</html>