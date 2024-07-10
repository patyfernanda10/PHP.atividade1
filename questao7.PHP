<?php
    //Prato
    $Prato_Quilos = 1.4;
    $Valor_Quilo = 45.00;
   
    //Calculo
    $Valor_Pagar = $Prato_Quilos * $Valor_Quilo  ;

    //Exibição
    echo "O valor a pagar pelo prato de {$Prato_Quilos} kg é de: " . $Valor_Pagar . " reais";
?>