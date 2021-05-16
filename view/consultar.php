<?php

include("../frontend/header.html");

echo"<br>";
echo "<nav class='navbar fixed-top navbar-dark bg-light'>";
    echo "<ul class='nav'>";
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='../index.html'>Voltar</a>";
    echo "</li>";
    echo "</ul>";
echo "</nav>";
echo "<br>";


include("../backend/model/consultarModel.php");
include("../frontend/footer.html");

?>