<?php
	include_once "conexao.php";
	session_start();

	$MATRICULA = $_SESSION['nMatricula'];

	$COD_BANCO = $_POST['nBanco'];
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

	$COD_PONTUACAO = 0;	

	$CADASTRADOS = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM CADASTRADOS WHERE MATRICULA = $MATRICULA"));

	if($CADASTRADOS["TIPO"] == 'D'){

		$ws = mysqli_query($conexao,"SELECT LAST_INSERT_ID(cod_pontuacao) FROM PONTUACAO");

		while($aux = mysqli_fetch_assoc($ws)){
			$COD_PONTUACAO = $aux["LAST_INSERT_ID(cod_pontuacao)"];
		}
	}	

	if($sql = mysqli_query($conexao, "INSERT INTO SOLICITACAO (MAT_SOLICITANTE, COD_NOME_BANCO, COD_AGENCIA, NUM_CONTA, NOME_EVENTO, LOCAL_EVENTO, INICIO_EVENTO, FIM_EVENTO, ABRANGENCIA, TITULO_TRABALHO, TITULO_PROJETO, TIPO_AUXILIO, DESCRICAO, COD_PONTUACAO ) VALUES ('$MATRICULA','$COD_BANCO','$COD_AGENCIA','$NUM_CONTA','$NOME_EVENTO','$LOCAL_EVENTO','$INICIO_EVENTO','$FIM_EVENTO','$ABRANGENCIA_EVENTO','$TITULO_TRABALHO','$TITULO_PROJETO','$AUXILIO','$DESC', '$COD_PONTUACAO')")){
		header("Location: Index.php?deu_certo=true");
	}else{
		header("Location: Solicitar_Diaria.php?erro=true");
	}
?>