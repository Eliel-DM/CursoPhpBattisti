<?php

/*
Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.
A função deve retornar o maior elemento presente no array.
Considere que o array sempre terá pelo menos um elemento
*/

$array  = [1, 2, 3, 10];

function maiorElemento($arrayDeElementos)
{
    rsort($arrayDeElementos);
    return $arrayDeElementos[0];
}

echo maiorElemento($array);
