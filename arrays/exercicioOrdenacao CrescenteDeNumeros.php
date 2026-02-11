<?php

/*
Implemente uma função chamada ordenarNumeros que recebe um array de números como parâmetro.
A função deve ordenar os números em ordem crescente.
Retorne o array de números ordenado.
*/

$array = [10.5, 123, 145, 788.90];

function ordenarNumeros($arrayNumeros)
{
    sort($arrayNumeros);
    return $arrayNumeros;
}

$arrayNumerosOrdenados = ordenarNumeros($array);
print_r($arrayNumerosOrdenados);
