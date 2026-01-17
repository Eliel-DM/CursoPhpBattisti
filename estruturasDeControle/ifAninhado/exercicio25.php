<?php

/* 
    Crie variáveis com números e outras com string;
    Faça um if checando se é um número;
    Caso for, atribua a multiplicação deste número por 2 em outra variável;
    E crie um outro if, que checa se o novo número é maior que 100;
    Se sim, imprima uma mensagem;
*/


$primeiroNumero = 60;
$primeiraString = "Teste";
$segundoNumero = 10;


if (is_int($primeiroNumero)) {; // true 
    echo "O valor é um inteiro! Primeira validação - Primeiro if <br>";
    $resultMultiplicacao = $primeiroNumero * 2;
    if ($resultMultiplicacao > 100) { // true 
        echo "O valor é maior que 100! Primeira validação - Segundo if <br>";
    } else {
        echo "O valor é menor que 100 Primeira validação - Segundo else <br> ";
    }
} else {
    echo  "O valor não é um inteiro!  Primeira validação - Primeiro else <br>";
}


if (is_int($primeiraString)) {; // false 
    echo "O valor é um inteiro! Segunda validação - Primeiro if <br>";
    $resultMultiplicacao = $primeiroNumero * 2;
    if ($resultMultiplicacao > 100) {
        echo "O valor é maior que 100! Segunda validação - Segundo if <br>";
    } else {
        echo "O valor é menor que 100 Segunda validação - Segundo else <br> ";
    }
} else {
    echo  "O valor não é um inteiro!  Segunda validação - Primeiro else <br>";
}

if (is_int($segundoNumero)) {; // true
    echo "O valor é um inteiro! Terceira validação - Primeiro if <br>";
    $resultMultiplicacao = $segundoNumero * 2;
    if ($resultMultiplicacao > 100) {
        echo "O valor é maior que 100! Terceira validação - Segundo if <br>";
    } else {
        echo "O valor é menor que 100 Terceira validação - Segundo else <br> ";
    }
} else {
    echo  "O valor não é um inteiro!  Terceira validação - Primeiro else <br>";
}
