<?php


/*
    Crie uma função que recebe características de algum objeto como argumento (Carro, Sofá, Cafeteira)
    em um array associativo;
    O array deve conter nome => preço;
    Retorne apenas os itens que custam mais de R$ 10;
    imprima o retorno;
*/



$arrayItens = ["Saco de Pão " => 13.50, "Pinga do Norte" => 9.50, "Computador Gamer Ryzen 7 + RX 7600 GT + 1 TB de RAM DDR5" => 100];
$arrayTemp = [];

foreach ($arrayItens as $nome => $preco) {
    if ($preco > 10) {
        $arrayTemp[$nome] = $preco;
    }
}

print_r($arrayTemp);
