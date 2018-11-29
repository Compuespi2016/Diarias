<?php
  require("conexao.php");
  include_once "cabecalho.php";
  $arq1 = $_FILES['Arq01'];
  $arq2 = $_FILES['Arq02'];
  $arq3 = $_FILES['Arq03'];
  $mat = $_SESSION['nMatricula'];
  $cod_sol = $_GET["id"];

  $novo_nome1 = time()."1.pdf";
  $novo_nome2 = time()."2.pdf";
  $novo_nome3 = time()."3.pdf";
  $dir = "arquivos/";

  move_uploaded_file($_FILES['Arq01']['tmp_name'], $dir.$novo_nome1);
  move_uploaded_file($_FILES['Arq02']['tmp_name'], $dir.$novo_nome2);
  move_uploaded_file($_FILES['Arq03']['tmp_name'], $dir.$novo_nome3);
    
  $queryInsercao = "INSERT INTO ARQUIVOS (MATRICULA, ID_SOLICITACAO, TRANSPORTE, HOSPEDAGEM, ALIMENTACAO) VALUES ('$mat', '$cod_sol', '$novo_nome1', '$novo_nome2','$novo_nome3')";
    
  mysqli_query($conexao,$queryInsercao) or die("Algo deu errado ao inserir o registro. Tente novamente.");

  echo 'Registro inserido com sucesso!';