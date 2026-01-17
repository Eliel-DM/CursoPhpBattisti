<?php

/*
    Complemente o exercício 22;
    Insira um else com uma mensagem para as pessoas que são menores de idade;
*/


$primeiraIdade = 18;
$segundaIdade = 16;
$mensagemDefaultTrue = "Maior ou igual a 18 anos!";
$mensagemDefaultFalse = "Menor de 18 anos!";

if ($primeiraIdade >= 18) {
    echo $mensagemDefaultTrue . " Primeira validação <br>";
} else {
    echo $mensagemDefaultFalse . " Primeira validação <br>";
}

if ($segundaIdade >= 18) {
    echo $mensagemDefaultTrue . " Segunda validação <br>";
} else {
    echo $mensagemDefaultFalse . " Segunda validação <br>";
}
