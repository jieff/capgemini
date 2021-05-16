<?php

include "conexao.php";

$pesquisa = $_POST['nome'];
$pesquisa = strtoupper($pesquisa);

$sql = "SELECT * FROM anuncio WHERE cliente='$pesquisa'";

$res = mysqli_query($mysqli, $sql);


  while($dado = mysqli_fetch_assoc($res)){
    
    //echo "<div class='list-group'>";
    //echo " <a href='#' class='list-group-item list-group-item-action' aria-current='true'>";
    //echo "<div class='d-flex w-100 justify-content-between'>";
    echo "<h2 class='mb-1'>";
    echo $dado['nomeAnuncio'];
    echo "</h2>";
    echo "Valor total investido: ".$dado['investimento']."<br>";

    $cliques = $dado['investimento'] * 0.12;
    $compart = $cliques * 0.15;
    $fase1 = $compart * 40;
        $fase2 = $fase1 * 40;
        $fase3 = $fase2 * 40;
        $fase4 = $fase3 * 40;
        $fases = $fase1 + $fase2 + $fase3 + $fase4;
        $soma =  $fases + $dado['investimento'];
    echo "Quantidade máxima de visualizações: ".$soma ."<br>";

    $qcliques = $soma / 0.12;
    echo "Quantidade máxima de cliques: ".$qcliques . "<br>";

    $qcompart = $qcliques * 0.33;
    echo "Quantidade máxima de compartilhamentos: " .$qcompart. "<br><br>";

    //echo "</a>";
    //echo "</div>";
    //echo "</div>";

  }

  ?>
