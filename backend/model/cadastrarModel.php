<?php

include_once("conexao.php");


$nomeAnuncio = $_POST['nomeAnuncio'];
$cliente = $_POST['cliente'];
$dataInicio = $_POST['dataInicio'];
$dataTermino = $_POST['dataTermino'];
$investimento = $_POST['investimento'];

$sql = "INSERT INTO anuncio (nomeAnuncio, cliente, dataInicio, dataTermino, investimento) VALUES ('$nomeAnuncio','$cliente','$dataInicio', '$dataTermino','$investimento')";
mysqli_query($mysqli, $sql);

mysqli_close($conecta);
header("Location:../../view/cadastrar.php");

?>