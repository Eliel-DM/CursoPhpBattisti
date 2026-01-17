<?php

/*
    Converta os seguintes dados para int com o operador de cast;

    "testando";
    12.9;
    true;
    [1,2,3];
    e Veja os resultados;
*/

$primeiraVar = (int) "testando";
$segundaVar = (int) "12.9";
$terceiraVar = (int) "true";
$quartaVar = (int) [12, 2, 3];


echo "
Primeira Var: $primeiraVar <br>
Segunda Var: $segundaVar <br>
Terceira Var: $terceiraVar <br>
Quarta Var: $quartaVar <br>
";
