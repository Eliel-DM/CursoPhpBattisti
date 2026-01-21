<?php

/*

    Crie um array com valores inteiros de 10 a 100,
    com incremento de 10 em 10;
    Aplique um loop neste array;
    Quando entrar os valores 30 ou 40, pule para a 
    próxima execução;

*/

$arrayInteiros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$incrementoLoop = 0;
$counterArray = 0;

while ($incrementoLoop < 100) {

    if ($arrayInteiros[$counterArray] == 30 || $arrayInteiros[$counterArray] == 40) {
        $incrementoLoop += 10;
        $counterArray = $incrementoLoop / 10;
        continue;
    }

    echo $arrayInteiros[$counterArray] . "<br>";

    $incrementoLoop += 10;
    $counterArray = $incrementoLoop / 10;
}
