<?php

/*
    Crie uma variável que receba um peso;
    Caso seja maior que 80, imprima a mensagem que está pesado demais;
    Se não, imprima "Peso dentro do limite";
*/


$valorPeso1 = 80;
$valorPeso2 = 90;
$mensagemDefaultTrue = "Peso dentro do limite!";
$mensagemDefaultFalse = "Está muito pesado, fora do limite aceitável!";


if ($valorPeso1 > 80) {
    echo $mensagemDefaultFalse . "Primeira validação <br>";
} else {
    echo $mensagemDefaultTrue . "Primeira validação <br>";
}

if ($valorPeso2 > 80) {
    echo $mensagemDefaultFalse . "Segunda validação <br>";
} else {
    echo $mensagemDefaultTrue . "Segunda validação <br>";
}
