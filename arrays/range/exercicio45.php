<?php

/*
    Crie um array com a função range 10 a 45;
    Imprima todos os números com a soma de 6;
    Se passar de 30 a soma, imprima também que o número é muito alto;
*/


$arr = range(10,45);



for($x = 0; $x < count($arr); $x++){
     if ($arr[$x]+6 > 30){
        echo "O número é muito alto";
    }
    echo $arr[$x] + 6 . "<br>";
   
}
