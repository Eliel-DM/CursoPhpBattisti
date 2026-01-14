<?php


/* 
    Crie um arquivo PHP;
    Crue uma operação com cada um dos operadores
    básicos;
    Cada operação deve estar em uma variável 
    diferente;
    Imprima cada uma das etapas;
    Ex: Soma -> Multiplicação -> Divisão -> Subtração;

*/

$primeiroNumero = 1000;
$segundoNumero = 50;

echo "Primeiro número: $primeiroNumero <br>", "Segundo número: $segundoNumero <br>";

$resultMultiplicacao = $primeiroNumero * $segundoNumero;
$resultDivisao = $primeiroNumero / $segundoNumero;
$resultSoma = $primeiroNumero + $segundoNumero;
$resultSubtracao = $primeiroNumero - $segundoNumero;

echo "
Resultado Multiplicação: $resultMultiplicacao <br>
Resultado Divisão: $resultDivisao <br>
Resultado Soma: $resultSoma <br>
Resultado Subtração: $resultSubtracao <br>
";
