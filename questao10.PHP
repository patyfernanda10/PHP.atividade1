<?php
    //Valores
    $valor1 = 8;
    $valor2 = 26;

    //Exibição
    echo "Valor 1 original: " . $valor1 . PHP_EOL;
    echo "Valor 2 original: " . $valor2 . PHP_EOL;

    //Calculo 
    $temp = $valor1;
    $valor1 = $valor2;
    $valor2 = $temp;

    //Exibição
    echo "Valor 1 após a troca: " . $valor1 . PHP_EOL;
    echo "Valor 2 após a troca: " . $valor2 . PHP_EOL;

?>
