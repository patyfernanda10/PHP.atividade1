<?php
    //Temperatura
    $Temperatura_Fahrenheit = 1.4;
   
    //Calculo
    $Temperatura_Celsius = ($Temperatura_Fahrenheit - 32) / 1.8 ;

    //Exibição
    echo "Temperatura em Fahrenheit: " . $Temperatura_Fahrenheit . " Fº " . PHP_EOL;
    echo "Temperatura em Celsius: " . $Temperatura_Celsius . " Cº";
?>
