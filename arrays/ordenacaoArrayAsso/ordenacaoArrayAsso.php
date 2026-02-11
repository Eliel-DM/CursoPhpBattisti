<?php

$arrayIdade  = [
    'Eliel' => 30,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];


asort($arrayIdade); // Valor em ordem Crescente 

print_r($arrayIdade);
echo "<br>";

$arrayIdade2  = [
    'Eliel' => 30,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

arsort($arrayIdade2); // Valor em ordem Decrescente 

print_r($arrayIdade2);
echo "<br>";


$arrayIdade3  = [
    'Eliel' => 30,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

ksort($arrayIdade3); // Chave em ordem Crescente 

print_r($arrayIdade3);
echo "<br>";


$arrayIdade4 = [
    'Eliel' => 30,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

krsort($arrayIdade4); // Chave em ordem Decrescente 

print_r($arrayIdade4);
echo "<br>";
