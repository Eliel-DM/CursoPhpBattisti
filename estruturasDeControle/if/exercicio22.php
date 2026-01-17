<?php

/*
    Crie variáveis que recebem idades;
    Cheque se as idades são maiores ou iguais a 18;
    Se sim, imprima uma mensagem que a pessoa é maior de idade;
 */

$primeiraIdade = 18;
$segundaIdade = 16;
$mensagemDefault = "Idade acima dos 18 anos.";


if ($primeiraIdade >= 18) { // true 
    echo "$mensagemDefault Primeira validação <br>";
}

if ($segundaIdade >= 18) { // false 
    echo "$mensagemDefault  Segunda validação <br>";
}
