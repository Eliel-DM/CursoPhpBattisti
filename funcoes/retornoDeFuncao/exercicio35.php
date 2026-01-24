<?php

/*
    Crie uma função que recebe um número;
    Retorne o valor deste número ao quadrado;
*/


function elevacaoAoQuadrado($number)
{

    return $number * $number;
}


$result = elevacaoAoQuadrado(4);
echo $result . "<br>";

$result = elevacaoAoQuadrado(9);
echo $result . "<br>";

$result = elevacaoAoQuadrado(11);
echo $result . "<br>";
