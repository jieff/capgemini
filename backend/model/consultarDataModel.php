<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "anuncios";


// Cria a conexão com o banco de dados
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);


$data1 = '2021/05/01';
$data2 = '2021/05/31';

$sql = "SELECT * FROM anuncio WHERE dataInicio BETWEEN '$data1' AND '$data2'";

$res = mysqli_query($mysqli, $sql);

echo "<table class='table table-striped table-hover'>";
    echo "<br><br>";
    echo "<thead>";
        echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>NOME DO ANÚNCIO</th>";
            echo "<th scope='col'>DATA INICIAL</th>";
        echo "</tr>";
    echo "</thead>";

while($dado = mysqli_fetch_assoc($res)){
    
    echo "<tr>";
    echo "<td>" . $dado['idAnuncio'] . "</td>";
    echo "<td>" . $dado['nomeAnuncio'] . "</td>";

    $data = $dado['dataInicio'];

    $result = explode('-', $data);
    $dia = $result[0];
    $mes = $result[1];
    $ano = $result[2];
    $data = $ano.'-'.$mes.'-'.$dia;
    echo "<td>" . $data . "</td>";
    echo "</tr>";
    
}


echo "</table>";


?>