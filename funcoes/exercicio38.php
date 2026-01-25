<?php

function organizadorDeItens(array $arrayItens)
{
    $result = implode(", ", $arrayItens);
    return $result;
}

$arrayItensDeSupermercado  = ["Sabão", "Arroz", "Ovos", "Pinga"];
echo organizadorDeItens($arrayItensDeSupermercado) . "<br>";
