<?php

/*
    Crie um array de 10 a 20 com for;
    Faça um loop em cima do array criado dinamicamente.
    Imprima apenas os números ímpares;
*/

$arrayDeNumeros = [];
for ($i = 10; $i <= 20; $i++) {
    array_push($arrayDeNumeros, $i);
}

for ($i = 0; $i <= 10; $i++) {
    if ($arrayDeNumeros[$i] % 2 != 0) {
        echo $arrayDeNumeros[$i] . "<br>";
    }
}
