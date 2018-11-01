<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Solicitar Diária</title>

	<meta charset="utf-8">

	<?php
		include_once "cabecalho.php";
	?>

	<style type="text/css">
		.container{
			width: 90%
		}

	</style>

	<script type="text/javascript">
		function calcula(x,y,z) {
			var valor1 = parseInt(document.getElementById(x).value,10);
			var valor2 = parseInt(document.getElementById(y).value,10);
			document.getElementById(z).value = valor1*valor2;

		}
	</script>



</head>
<body>
	<center>
	<h1 id="titulo_principal">Solicitação</h1>
	<br>
	<form method="post" action="salva_pontuacao.php">
		<input type="button" value="pontuaçao" onclick="return verifica_pontuacao(30, 2)">
		<br>
		<h3>Formulario de Producao Cientifica do Pesquisador</h3>
		<br>
		<fieldset id="dados_solicitacao" style="width: 70%"  class="border bg-light rounded">
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
			    <div class="col-2">
			      Escore Final
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
			    <div class="col-2">
			      <input type="text" id="valor" value="30" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" size = "2" form-control" id="inputDoutorado" required="" onblur="calcula('valor','inputDoutorado','total')">
			    </div>
			    <div class="col-2">
			    	<input type="text" id="total" size = "2" disabled="disabled" name="total"/>
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
			      <input type="text" id="valor2" value="15" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="Mestrado" size = "2" form-control" id="inputMestrado" required="" onblur="calcula('valor2','inputMestrado','total2')">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total2" size = "2" disabled="disabled" name="total"/>
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
			      <input type="text" id="valor3" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total3" size = "2" disabled="disabled" name="total"/>
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis A1
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.1" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required=""  >
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.1" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis A2
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.2" value="8" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.2" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis B1, ou trabalho completo publicado em Conferência
A1, A2 e B1 (especifico para área de Ciência da Computação)
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.3" value="6" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.3" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis B2, ou trabalho completo publicado em Conferência
A1, A2 e B1 (especifico para área de Ciência da Computação)
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.4" value="4" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.4" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis B3, ou trabalho completo publicado em Conferência B2, B3 e
B4 (especifico para área de Ciência da Computação)
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.5" value="3" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.5" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis B4; B5
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.6" value="2" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.6" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      Qualis C
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor4.7" value="1" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total4.7" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>
			  <br>

			
			  <div class="row">
				<div class="col-1">
			      5
			    </div>
			    <div class="col-5">
			      Artigos publicados em periódicos científicos NÃO
classificados pelo sistema QUALIS 3
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor5" value="0.5" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total5" size = "2" disabled="disabled" name="total"/>
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      6.1 - Eventos internacionais
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor6.1" value="2" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total6.1" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      6.2 - Eventos nacionais e regionais
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor6.2" value="1" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total6.2" size = "2" disabled="disabled" name="total"/>
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
			      <input type="text" id="valor7" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total7" size = "2" disabled="disabled" name="total"/>
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
			      <input type="text" id="valor8" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total8" size = "2" disabled="disabled" name="total"/>
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      9.1 - Livro publicado por editora com conselho editorial,
com no mínimo 60 páginas
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor9.1" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total9.1" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      9.2 - Livro publicado sem conselho editorial, com no
mínimo 60 páginas
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor9.2" value="5" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total9.2" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      9.3 - Livro organizado
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor9.3" value="5" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total9.3" size = "2" disabled="disabled" name="total"/>
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      9.4 - Capítulo de livro publicado por editora com conselho editorial
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor9.4" value="3" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total9.4" size = "2" disabled="disabled" name="total"/>
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      10.1 - Como coordenador
			    </div>
			    <div class="col-2">
			      <input type="text" id="valor10.1" value="10" size = "1"  disabled="disabled"  />
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	<input type="text" id="total" size = "2" disabled="disabled" name="total10.1"/>
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      10.2 - Como colaborador
			    </div>
			    <div class="col-2">
			      5
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>
			  <br>


			  <div class="row">
				<div class="col-1">
			      11
			    </div>
			    <div class="col-5">
			      Projeto de pesquisa com financiamento interno (Editais
PIP)
			    </div>
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      11.1 - Como coordenador
			    </div>
			    <div class="col-2">
			      5
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      11.2 - Como colaborador
			    </div>
			    <div class="col-2">
			      3
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.1 - Orientação de doutorado
			    </div>
			    <div class="col-2">
			      10
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.2 - Orientação de mestrado
			    </div>
			    <div class="col-2">
			      8
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.3 - Orientação de iniciação científica
4
			    </div>
			    <div class="col-2">
			      4
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.4 - Orientação de TCC de graduação
4
			    </div>
			    <div class="col-2">
			      2
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.5 - Orientação de iniciação científica júnior
4
			    </div>
			    <div class="col-2">
			      0,5
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.6 - Orientação de monografia de especialização
4
			    </div>
			    <div class="col-2">
			      2
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      12.7 - Co-orientação de doutorado
			    </div>
			    <div class="col-2">
			      6
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
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
			    <div class="col-2">
			      
			    </div>
			    <div class="col-2">
			       
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      13.1 - Doutorado
			    </div>
			    <div class="col-2">
			      6
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      13.2 - Qualificação de doutorado
			    </div>
			    <div class="col-2">
			      3
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      13.3 - Mestrado
			    </div>
			    <div class="col-2">
			      4
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>


			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      13.4 - Qualificação de mestrado
			    </div>
			    <div class="col-2">
			      2
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>

			  <div class="row">
				<div class="col-1">
			      
			    </div>
			    <div class="col-5">
			      13.5 - TCC/Monografia 4
			    </div>
			    <div class="col-2">
			      1
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>
			  <br>


			  <div class="row">
				<div class="col-1">
			      14
			    </div>
			    <div class="col-5">
			      Membro do Comitê de Ética em Pesquisa da UESPI (por
ano de atividade)
			    </div>
			    <div class="col-2">
			      6
			    </div>
			    <div class="col-2">
			       <input type="text" name="DOUTORADO" class="col-sm-7 form-control" id="inputDOUTORADO" required="">
			    </div>
			    <div class="col-2">
			      	
			    </div>
			  </div>
			</div>	
		<br>
		</fieldset>
		<br>

		<input class="btn btn-primary" type="submit" value="Enviar Solicitação">

		<br>
		<br>
	</form>
	</center>
</body>
</html>