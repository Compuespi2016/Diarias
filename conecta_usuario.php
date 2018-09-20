<?php
	include_once("conexao.php");

	$matricula = $_POST['nMatricula'];
	$senha = $_POST['nSenha'];

	$sql = mysqli_query($conexao, "select * from CADASTRADOS where MATRICULA = '$matricula' and SENHA = '$senha'");

	$row = mysql_num_rows($sql);
	if($row > 0){
		session_start();
		$_SESSION['nMatricula'] = $_POST['nMatricula'];
		$_SESSION['nSenha'] = $_POST['nSenha'];
	}

	mysqli_close($conexao);
?>