<?php

/*
    Faça as seguintes verificações em estruturas if:
    5 é maior que 2? 
    Matheus é diferente de Pedro;
    12 é menor ou igual a 11;
    Você deve inserir os valores em variáveis;
*/
$primeiroNumero = 5;
$segundoNumero = 2;

if ($primeiroNumero > $segundoNumero) { // Verdadeira
    echo "A primeira asserção é verdadeira! 5 é maior que 2. <br>";
}

$primeiroNome = "Matheus";
$segundoNome = "Pedro";

if ($primeiroNome != $segundoNome) { // Verdadeira
    echo "A segunda asserção é verdadeira! Matheus é diferente de Pedro. <br>";
}

$primeiroNumero = 12;
$segundoNumero = 11;

if ($primeiroNumero  <= $segundoNumero) { // falsa
    echo "A terceira asserção é verdadeira! 12 É menor ou igual a 11. <br>";
}
