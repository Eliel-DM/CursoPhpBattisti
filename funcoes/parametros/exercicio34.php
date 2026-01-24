<?php

/*
    Crie uma função que verifica se um número é par ou ímpar;
    Se for par imprima uma mensagem;
    Se for ímpar imprima uma mensagem;
*/

function parOuImpar($number)
{
    if ($number % 2 === 0) {
        echo "O número $number é par!<br>";
    } else {
        echo "O número $number é impar!<br>";
    }
}

parOuImpar(901);
