<?php

/*
    Crie um array com números de 1 a 20;
    Crie um loop for para este array;
    Imprima apenas os pares; 
*/

$arrayDeNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($counter = 0; $counter < count($arrayDeNumeros); $counter++) {
    if ($arrayDeNumeros[$counter] % 2 == 0) {
        echo $arrayDeNumeros[$counter] . "<br>";
    }
}
