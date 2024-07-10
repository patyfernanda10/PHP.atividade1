<?php
    //Raio
    $Raio = 6.0;

    //Constante de PI
    define ('PI', 3.14159);

    //Calculo diâmetro
    $Diâmetro = $Raio * 2;

    //Calculo comprimento
    $Comprimento = $Raio * 2 * PI;

    //Calculo área
    $Area = PI * $Raio * $Raio;

    //Exibição
    echo "Circunferência com Raio de: " . $Raio . " unidades" . PHP_EOL;
    echo "Circunferência com Diâmetro de: " . $Diâmetro . " unidades" . PHP_EOL;
    echo "Circunferência com Comprimento de: " . $Comprimento . " unidades" . PHP_EOL;
    echo "Circunferência com Área de: " . $Area . " unidades quadradas" . PHP_EOL;
    ?>