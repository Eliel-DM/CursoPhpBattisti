<?php

/*
    Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.
    A função deve retornar um novo array contendo apenas os números pares presentes no array original.
    Considere que o array sempre terá pelo menos um elemento.
*/

$array = [1, 2, 3, 4, 5, 6];

function encontrarPares($arrayNumeros)
{
    $parArray = [];
    foreach ($arrayNumeros as $numeros) {
        if ($numeros % 2 == 0) {
            $parArray[] = $numeros;
        }
    }
    return $parArray;
}

$parArray = encontrarPares($array);
print_r($parArray);
