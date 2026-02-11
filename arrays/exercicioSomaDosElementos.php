<?php

/*
    Soma dos Elementos

    Escreva uma função chamada somaElementos que recebe um array de números como parâmetro.
    A função deve retornar a soma de todos os elementos do array.
    Considere que o array sempre terá pelo menos um elemento.
*/

$array =  [1, 2, 3];

function somaElementos($arrayNumeros)
{
    $totalSumArr = array_sum($arrayNumeros);
    return $totalSumArr;
}

echo somaElementos($array);
