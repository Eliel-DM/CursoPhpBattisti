<?php

/*
Soma dos Números Pares
    Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.
    A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.
    Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
*/

function sumEvenNumbers(int $inteiroPositivo)
{
    $valorTotalSoma = 0;
    for ($inteiroPositivo; $inteiroPositivo > 0; $inteiroPositivo--) {
        if ($inteiroPositivo % 2 == 0) {
            $valorTotalSoma += $inteiroPositivo;
        }
        //echo $valorTotalSoma . "<br>";
    }

    return $valorTotalSoma;
}


echo sumEvenNumbers(100);
