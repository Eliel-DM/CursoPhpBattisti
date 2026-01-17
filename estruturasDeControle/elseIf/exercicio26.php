<?php


/*
Crie uma variável que recebe uma velocidade de uma carro;
Depois crie uma estrutura if que verifica essa velicidade;
Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
Se forma maior que 40, imprima uma mensagem de multa;
*/

$primeiraVelocidade = 39;
$segundaVelocidade = 40;
$terceiraVelocidade = 50;

$velocidadeTemp = 0;


$velocidadeTemp = $primeiraVelocidade; // Primeira Var
if ($velocidadeTemp < 40) {
    echo "Motorista está na velocidade correta - Primeira validação 1<br>";
} else if ($velocidadeTemp == 40) {
    echo "Toma cuidado motorista kaka -  Segunda validação 1 <br>";
} else {
    echo "Você foi multado :(  -  Terceira validação 1 <br>";
}


$velocidadeTemp = $segundaVelocidade; // Segunda Var
if ($velocidadeTemp < 40) {
    echo "Motorista está na velocidade correta - Primeira validação 2<br>";
} else if ($velocidadeTemp == 40) {
    echo "Toma cuidado motorista kaka -  Segunda validação 2 <br>";
} else {
    echo "Você foi multado :(  -  Terceira validação 2 <br>";
}



$velocidadeTemp = $terceiraVelocidade; // Terceira Var
if ($velocidadeTemp < 40) {
    echo "Motorista está na velocidade correta - Primeira validação 3<br>";
} else if ($velocidadeTemp == 40) {
    echo "Toma cuidado motorista kaka -  Segunda validação 3 <br>";
} else {
    echo "Você foi multado :(  -  Terceira validação 3 <br>";
}
