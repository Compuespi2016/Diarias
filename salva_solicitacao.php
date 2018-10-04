<?php
	include_once "conexao.php";
	session_start();

	$MATRICULA = $_SESSION['nMatricula'];

	$COD_BANCO = $_POST['nBamco'];
	$COD_AGENCIA = $_POST['nCodigoDaAgencia'];
	$NUM_CONTA = $_POST['nNumConta'];

	$NOME_EVENTO = $_POST['nNomeDoEvento'];
	$LOCAL_EVENTO = $_POST['nLocalDoEvento'];
	$INICIO_EVENTO = $_POST['nInicioEvento'];
	$FIM_EVENTO = $_POST['nFimEvento'];
	$ABRANGENCIA_EVENTO = $_POST['nAbrangenciaDoEvento'];

	$TITULO_TRABALHO = $_POST['TituloDoTrabalho'];
	$TITULO_PROJETO = $_POST['TituloDoProjetoCadastradoNaProp'];

	$AUXILIO = $_POST['AuxilioSolicitado'];
	$DESC = $_POST['nDesc'];

	$sql = mysqli_query($conexao, "INSERT INTO SOLICITACAO (MAT_SOLICITANTE, COD_NOME_BANCO, COD_AGENCIA, NUM_CONTA, NOME_EVENTO, LOCAL_EVENTO, INICIO_EVENTO, FIM_EVENTO, ABRANGENCIA, TITULO_TRABALHO, TITULO_PROJETO, TIPO_AUXILIO, DESCRICAO ) VALUES ('$MATRICULA','$COD_BANCO','$COD_AGENCIA','$NUM_CONTA','$NOME_EVENTO','$LOCAL_EVENTO','$INICIO_EVENTO','$FIM_EVENTO','$ABRANGENCIA_EVENTO','$TITULO_TRABALHO','$TITULO_PROJETO','$AUXILIO','$DESC')");
	
	header("Location: Index.php");
?>