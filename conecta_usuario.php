<?php
	include_once("conexao.php");

	$matricula = $_POST['nMatricula'];
	$senha = $_POST['nSenha'];

	$sql = mysqli_query($conexao, "select * from CADASTRADOS where MATRICULA = '$matricula' and SENHA = '$senha'");

	$row = mysqli_num_rows($sql);
	if($row > 0){
		session_start();
		$_SESSION['nMatricula'] = $_POST['nMatricula'];
		$_SESSION['nNome'] = mysqli_query($conexao, "select NOME from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nCampus'] = mysqli_query($conexao, "select CAMPUS from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nTelefone'] = mysqli_query($conexao, "select TELEFONE from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nEmail'] = mysqli_query($conexao, "select EMAIL from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nCentro'] = mysqli_query($conexao, "select CENTRO from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nTipo'] = mysqli_query($conexao, "select TIPO from CADASTRADOS where MATRICULA = '$matricula'");
		$_SESSION['nSenha'] = $_POST['nSenha'];
	}

	echo $_SESSION['nNome'];
	#header("Location: Index.php");

	mysqli_close($conexao);
?>