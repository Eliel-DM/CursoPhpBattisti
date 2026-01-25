<?php

/*
    Contagem de Vogais

    Crie uma função chamada countVowels que recebe uma string como parâmetro.
    A função deve retornar a quantidade de vogais presentes na string.
    Utilize uma estrutura de repetição para percorrer cada caractere da string.
    Utilize uma variável para armazenar o contador de vogais.
    Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.

*/

function isVogal(string $caractere)
{
    switch ($caractere) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            return true;
            break;
        default:
            return false;
    }
}

function countVowels($stringParam)
{
    $counterVogais = 0;
    $lenthStrinParam = mb_strlen($stringParam);
    for ($lenthStrinParam; $lenthStrinParam >= 0; $lenthStrinParam--) {
        $char = mb_substr($stringParam, $lenthStrinParam, 1);
        if (isVogal(mb_strtolower($char))) {
            $counterVogais++;
        }
    }
    return $counterVogais;
}

echo countVowels("Eliel") . "<br>";
echo countVowels("Pedro") . "<br>";
echo countVowels("João ") . "<br>"; // Vai contar errado por causa do caractere ã;
