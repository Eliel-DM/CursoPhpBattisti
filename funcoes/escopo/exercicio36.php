<?php
/*
    Crie uma função que recebe um array de número;
    Crie um novo array com apenas os números que são maiores que 7;
    Retorne este novo array e imprima na tela;

*/

function arrayValidator(array $array)
{
    $arrayTemp = [];
    for ($x = 0; $x < count($array); $x++) {
        if ($array[$x] > 7) {
            array_push($arrayTemp, $array[$x]);
        }
    }
    return $arrayTemp;
}


$arrayTeste = [14, 82, 3, 55, 91, 27, 48, 66, 10, 39];
$result = arrayValidator($arrayTeste);
print_r($result);
