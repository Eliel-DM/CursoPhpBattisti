<?php

/*
    Crie um array, com os seguintes valores: 
    jagar, 3.0,azul ,18, Teto solar, automático;
    Chame este aray de Carro;
    Crie variáveis com base neste array;
*/


$carro = ["Jaguar", 3.0, "azul", 18, "Teto Solar", "Automático"];

list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

echo $marca . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $aro . "<br>";
echo $opcional . "<br>";
echo $cambio . "<br>";
