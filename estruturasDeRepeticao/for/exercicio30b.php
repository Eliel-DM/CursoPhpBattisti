<?php

/*
    Crie um array de 1 a 10;
    Utilize um loop for para criar este array;
    Dica: Você Pode utilizar o método array_push (arr, elemento)
    para inserir um elemento em um array;
    Imprima o array criado com print_r;
*/


$arrayDeNumeros = [];

for ($i = 1; $i < 11; $i++) {
    array_push($arrayDeNumeros, $i);
}

print_r($arrayDeNumeros);
