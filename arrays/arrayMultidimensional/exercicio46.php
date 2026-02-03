<?php

/*
    Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
    Imprima todos os elementos de cada um dos arrays;
    Imprima também quando está mudando de Array;
*/


$arr = [
    ["eliel", "Tatu","Klebin", "Jéssica"],
    [1,6,8,34],
    ["user","admin","Super-Admin","Visitante"]
];

for($i = 1; $i < count($arr); $i++){
    echo "Entrando no Array: $i";
    for ($j = 0; $j < count($arr[$i][$j]);$j++){
        echo $arr[$i][$j];
    }
}