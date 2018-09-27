<?php
	include_once "conexao.php";
	session_start();

	$MATRICULA = $_SESSION['nMatricula'];
	$CODBANCO = $_POST['nCodigoDoBanco'];
	$NOMEBANCO = $_POST['nNomeDoBanco'];
	$CODAGENCIA = $_POST['nCodigoDaAgencia'];
	$NOMEEVENTO = $_POST['nNomeDoEvento'];
	$LOCALEVENTO = $_POST['nLocalEPeriodoDoEvento'];
	$ABRANGENCIAEVENTO = $_POST['abrangenciaDoEvento'];
	$TITULOTRABALHO = $_POST['TituloDoTrabalho'];
	$TITULOPROJETO = $_POST['TituloDoProjetoCadastradoNaProp'];
	$RECEBEU = $_POST['RecebeuAuxilioAnosAnteriores'];
	$INDICATIVO = $_POST['IndicativoAnos'];
	$AUXILIO = $_POST['AuxilioSolicitado'];
	$DESC = $_POST['Descricao'];

	$sql = mysqli_query($conexao, "insert into SOLICITACAO (MAT_SOLICITANTE, CODBANCO, NOMEBANCO, CODAGENCIA, NOME_EVENTO, LOCAL_PERIODO, ABRANGENCIA, TITULO_TRABALHO, TITULO_PROJETO, AUXILIO, ANOS_AUXILIO, TIPO_AUXILIO, DESCRICAO ) values ('$MATRICULA','$CODBANCO','$NOMEBANCO','$CODAGENCIA','$NOMEEVENTO','$LOCALEVENTO','$ABRANGENCIAEVENTO','$TITULOTRABALHO','$TITULOPROJETO','$RECEBEU','$INDICATIVO','$AUXILIO','$DESC')");

?>