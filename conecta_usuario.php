<?php
	include_once("conexao.php");

	$matricula = $_POST['nMatricula'];
	$senha = $_POST['nSenha'];

	$sql = mysqli_query($conexao, "select * from CADASTRADOS where MATRICULA = '$matricula' and SENHA = '$senha'");

	$row = mysqli_num_rows($sql);
	if($row > 0){
		$array_bd = mysqli_fetch_array($sql);

		session_start();
		$_SESSION['nMatricula'] = $_POST['nMatricula'];
		$_SESSION['nNome'] = $array_bd["NOME"];
		$_SESSION['nCampus'] = $array_bd["CAMPUS"];
		$_SESSION['nTelefone'] = $array_bd["TELEFONE"];
		$_SESSION['nEmail'] = $array_bd["EMAIL"];
		$_SESSION['nCentro'] = $array_bd["CENTRO"];
		$_SESSION['nTipo'] = $array_bd["TIPO"];
		$_SESSION['nSenha'] = $_POST['nSenha'];
	}

		header("Location: Index.php");

	mysqli_close($conexao);
?>