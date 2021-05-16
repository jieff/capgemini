<?php

    include "conexao.php";

    //efetua a consulta
    $sql    = "SELECT * FROM anuncio"; 
    $result = $mysqli->query($sql);


    echo "<table class='table table-striped table-hover'>";
    echo "<br><br>";
    echo "<thead>";
        echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>NOME DO ANÚNCIO</th>";
            echo "<th scope='col'>CLIENTE</th>";
            echo "<th scope='col'>DATA INICIO</th>";
            echo "<th scope='col'>DATA TERMINO</th>";
            echo "<th scope='col'>INVESTIMENTO</th>";

        echo "</tr>";
    echo "</thead>";
    
    while($dado = mysqli_fetch_assoc($result)){

        echo "<tr>";

        echo "<td>"  . $dado['idAnuncio']    . "</td>";
        echo "<td>"  . $dado['nomeAnuncio']  . "</td>";
        echo "<td>"  . $dado['cliente']      . "</td>";
        echo "<td>"  . $dado['dataInicio']   . "</td>";
        echo "<td>"  . $dado['dataTermino']  . "</td>";
        echo "<td>"  . $dado['investimento'] . "</td>";
        echo "</tr>";
        
    }

    echo "</table>";
    
?>