<?php

/*
    Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo:
    Cheque se a variável é um inteiro;
    Caso sim, apresente uma mensagem confirmando o tipo de dado;
    Caso não, apresente outra mensagem;
*/


$primeiraVar = 12;

if (is_int($primeiraVar)) { // true 
    echo "A variável é do tipo inteiro. Primeira validação<br>";
} else {
    echo "A variável não é do tipo inteiro. Primeira validação<br>";
}

$primeiraVar = "12";

if (is_int($primeiraVar)) { // false 
    echo "A variável é do tipo inteiro. Segunda validação<br>";
} else {
    echo "A variável não é do tipo inteiro. Segunda validação<br>";
}
