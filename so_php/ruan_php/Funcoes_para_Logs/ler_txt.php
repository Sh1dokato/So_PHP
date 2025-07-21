<?php
    $texto = file_get_contents("texto.txt");
    echo nl2br($texto) . "<br>";
    var_dump($texto);
?>