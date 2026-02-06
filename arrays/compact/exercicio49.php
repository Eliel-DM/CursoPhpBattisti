<?php

/*
    Crie variáveis com característica de algum objeto ou animal;
    Depois crie um array com compact com estas mesmas variáveis;
    Faça um loop no array e imprima os valores;
*/

$cor = "Preta";
$nome = "Dara";
$raca = "RottWeiler";
$origem = "Alemanha";

$cachorro  = compact("cor","nome","raca","origem");

foreach ($cachorro as $countCachorro){
    echo $countCachorro . "<br>";
}