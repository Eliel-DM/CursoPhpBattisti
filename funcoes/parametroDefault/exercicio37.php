<?php

/*
    Crie uma função chamada defineCorCarro;
    Onde há um parâmetro chamado cor, com o valor default de vermelha;
    Retorne a cor do carro;
    imprima o retorno tanto como parâmetro default, como também definindo a cor;
*/


function defineCorCarro($cor = "Vermelha")
{
    return $cor;
}

echo defineCorCarro() . "<br>";
echo defineCorCarro("Azul") . "<br>";
