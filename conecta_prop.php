<?php
	include_once("conexao.php");

	$matricula = $_POST['nUsuario'];
	$senha = $_POST['nSenha'];

	$sql = mysqli_query($conexao, "select * from PROP where USUARIO = '$matricula' and SENHA = '$senha'");

	$row = mysqli_num_rows($sql);
	if($row > 0){
		$array_bd = mysqli_fetch_array($sql);

		session_start();
		$_SESSION['nUsuario'] = $_POST['nUsuario'];
		$_SESSION['nSenha'] = $_POST['nSenha'];

		header("Location: index_prop.php?sucesso=true");
	}else{
		header("Location: login_prop.php?erro=true");
	}

	mysqli_close($conexao);
?>