<?php

/*
    Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
    Imprima todos os elementos de cada um dos arrays;
    Imprima também quando está mudando de Array;
*/


$arr = [
    ["eliel", "Tatu", "Klebin", "Jéssica"],
    [1, 6, 8, 34],
    ["user", "admin", "Super-Admin", "Visitante"]
];

for ($i = 0; $i < count($arr); $i++) {
    echo "Mudando de Array : ";
    echo "<br> ";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        print_r($arr[$i][$j]);
        echo "<br>";
    }
}
