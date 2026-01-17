<?php


/*
    Insira o valor 5 em uma variável, e o valor 3 em outra;
    Teste os operadores de : igualdade, diferença, idêntico e não idêntico;
*/

$primeiraVar = 5;
$segundaVar = 3;


if ($primeiraVar == $segundaVar) {
    echo "A $primeiraVar é igual a $segundaVar <br>";
} else {
    echo "A $primeiraVar é diferente a $segundaVar<br>";
}

if ($primeiraVar != $segundaVar) {
    echo "A $primeiraVar é diferente a $segundaVar<br>";
} else {
    echo "A $primeiraVar é igual a $segundaVar<br>";
}

if ($primeiraVar === $segundaVar) {
    echo "A $primeiraVar é idêntico a $segundaVar<br>";
} else {
    echo "A $primeiraVar não é idêntico a $segundaVar<br>";
}

if ($primeiraVar !== $segundaVar) {
    echo "A $primeiraVar não é idêntico a $segundaVar<br>";
} else {
    echo "A $primeiraVar é idêntico a $segundaVar<br>";
}
