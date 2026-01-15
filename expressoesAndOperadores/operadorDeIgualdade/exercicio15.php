<?php

/*
    Crie uma operação que retorne falso com igualdade;
    Crie uma operação que retorne verdadeiro com igualdade;
*/


$primeiraVar = 10;
$segundaVar = 12;

if ($primeiraVar == $segundaVar) {
    echo "Operação retornando true com igualdade <br>";
} else {
    echo "Operação retornando false com igualdade <br>";
}

if ($primeiraVar == $segundaVar - 2) {
    echo "Operação retornando true com igualdade";
}
