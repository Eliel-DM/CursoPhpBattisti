<?php

/*
Cálculo de Desconto

    Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

    A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

    Considere as seguintes categorias e seus respectivos descontos:

        "eletrônicos": 10% de desconto.

        "vestuário": 20% de desconto.

        "alimentos": 5% de desconto.

        Outras categorias: nenhum desconto.

    Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

    O valor do produto e a categoria serão sempre fornecidos como argumentos da função.
*/

function calcularDesconto(string $valorProduto, string $categoria)
{
    switch ($categoria) {
        case "eletrônicos":
            return  $valorProduto = $valorProduto - ($valorProduto * 0.1);
            break;
        case "vestuário":
            return $valorProduto = $valorProduto - ($valorProduto * 0.2);
            break;
        case "alimentos":
            return $produto = $valorProduto - ($valorProduto * 0.05);
            break;
        default:
            return $valorProduto;
    }
}
