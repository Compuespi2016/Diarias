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
		var resultado_final = 0;

		function mostra_resultado(mostrar) {
			document.getElementById(mostrar).value = parseFloat(resultado_final);
		}

		function calcula(x,y,z) {
			var valor1 = parseFloat(document.getElementById(x).value,10);
			var valor2 = parseFloat(document.getElementById(y).value,10);
			document.getElementById(z).value = valor1*valor2;
			resultado_final = resultado_final + (valor1*valor2);
		}

		function SomenteNumero(e){
			var tecla=(window.event)?event.keyCode:e.which;   
    	if((tecla>47 && tecla<58)) return true;
    	else{
    		if (tecla==8 || tecla==0) return true;
			else  return false;
    	}
		}
	</script>

</head>
<body>
	<center>
	<h1 id="titulo_principal">Solicitação</h1>
	<br>
	<form method="post" action="salva_pontuacao.php">
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
					<div class="col-md-2">
						<input class="form-control" type="text" id="valor" value="30" size = "1"  disabled="disabled"/>
					</div>
					<div class="col-md-2">
						<input class="form-control" type="text" name="DOUTORADO" size="2" id="inputDoutorado" onblur="calcula('valor','inputDoutorado','total')" onkeypress="return SomenteNumero(event)" required="">
					</div>
					<div class="col-md-2">
						<input class="form-control" type="text" id="total" size = "2" disabled="disabled" name="total"/>
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
					<div class="col-md-2">
						<input class="form-control" type="text" name="Mestrado" size = "2" id="inputMestrado" onkeypress="return SomenteNumero(event)" onblur="calcula('valor2','inputMestrado','total2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total2" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputBPPC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor3','inputBPPC','total3')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total3" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQA1" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.1','inputQA1','total4.1')" required=""  >
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.1" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQA2" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.2','inputQA2','total4.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.2" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQB1" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.3','inputQB1','total4.3')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.3" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQB2" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.4','inputQB2','total4.4')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.4" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQB3" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.5','inputQB3','total4.5')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.5" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQB45" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.6','inputQB45','total4.6')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.6" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor4.7','inputQC','total4.7')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total4.7" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputAPPCNCPS" onkeypress="return SomenteNumero(event)" onblur="calcula('valor5','inputAPPCNCPS','total5')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total5" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputEI" onkeypress="return SomenteNumero(event)" onblur="calcula('valor6.1','inputEI','total6.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total6.1" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputENR" onkeypress="return SomenteNumero(event)" onblur="calcula('valor6.2','inputENR','total6.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total6.2" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputPR" onkeypress="return SomenteNumero(event)" onblur="calcula('valor7','inputPR','total7')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total7" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputSR" onkeypress="return SomenteNumero(event)" onblur="calcula('valor8','inputSR','total8')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total8" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputLPECE" onkeypress="return SomenteNumero(event)" onblur="calcula('valor9.1','inputLPECE','total9.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total9.1" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputLPSCE" onkeypress="return SomenteNumero(event)" onblur="calcula('valor9.2','inputLPSCE','total9.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total9.2" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputLO" onkeypress="return SomenteNumero(event)" onblur="calcula('valor9.3','inputLO','total9.3')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total9.3" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCLPECE" onkeypress="return SomenteNumero(event)" onblur="calcula('valor9.4','inputCLPECE','total9.4')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total9.4" size = "2" disabled="disabled" name="total"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputPPFECCO" onkeypress="return SomenteNumero(event)" onblur="calcula('valor10.1','inputPPFECCO','total10.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total10.1" size = "2" disabled="disabled" name="total10.1"/>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputPPFECC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor10.2','inputPPFECC','total10.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" id="total10.2" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputPPFICCO" onkeypress="return SomenteNumero(event)" onblur="calcula('valor11.1','inputPPFICCO','total11.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total11.1" disabled="disabled" required="" readonly>	
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputPPFICC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor11.2','inputPPFICC','total11.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total11.2" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOD" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.1','inputCCOD','total12.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.1" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOM" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.2','inputCCOM','total12.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.2" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOIC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.3','inputCCOIC','total12.3')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.3" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOTG" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.4','inputCCOTG','total12.4')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.4" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOICJ" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.5','inputCCOICJ','total12.5')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.5" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCOME" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.6','inputCCOME','total12.6')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.6" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputCCCD" onkeypress="return SomenteNumero(event)" onblur="calcula('valor12.7','inputCCCD','total12.7')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total12.7" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputD" onkeypress="return SomenteNumero(event)" onblur="calcula('valor13.1','inputD','total13.1')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.1" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQD" onkeypress="return SomenteNumero(event)" onblur="calcula('valor13.2','inputQD','total13.2')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.2" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputM" onkeypress="return SomenteNumero(event)" onblur="calcula('valor13.3','inputM','total13.3')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.3" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputQM" onkeypress="return SomenteNumero(event)" onblur="calcula('valor13.4','inputQM','total13.4')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.4" disabled="disabled" required="" readonly>
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputTC" onkeypress="return SomenteNumero(event)" onblur="calcula('valor13.5','inputTC','total13.5')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="DOUTORADO" id="total13.5" disabled="disabled" required="" readonly>	
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
						<input class="form-control" type="text" name="DOUTORADO" id="inputMCEP" onkeypress="return SomenteNumero(event)" onblur="calcula('valor14','inputMCEP','total14')" required="">
					</div>
					<div class="col-2">
						<input class="form-control" type="text" name="" id="total14" disabled="disabled" readonly>
					</div>
				</div>
				</div>	
			<br>

				<div class="row justify-content-center">
					<div class="col-5">
						Resultado final (clique dentro e fora da caixa de texto para ver o resultado)
					</div>
					<div class="col-3">
						<input class="form-control" type="text" name="" id="mostra_soma" onblur="mostra_resultado('mostra_soma')" readonly>
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