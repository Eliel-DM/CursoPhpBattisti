<?php

// Condição verdadeira;
if (5 > 2) {
    echo "A validação é Verdadeira <br>";
}

// Condição falsa;
if (5 <= 2) {
    echo "A validação é Verdadeira <br>";
}

// Utilizando op. lógicos;
if (10 === 10 && 9 > 3) {
    echo "A validação é Verdadeira <br>";
}


// Utilizando variáveis

$a = 10;
$b = 5;

$c = "Deu certo, entrou no if 3 <br>";

if ($a > $b) {
    echo $c;
}
