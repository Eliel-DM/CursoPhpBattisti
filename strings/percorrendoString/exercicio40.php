<?php

/*
    Percorra a String: O rato roeu a roupa do rei de Roma, a partir de um loop;
    Imprima o número de lestras "a" desta string;
*/

$frase = "O rato roeu a roupa do rei de Roma";
$count = 0;

for ($i = 0; $i < strlen($frase); $i++) {
    if ($frase[$i] == "a") {
        $count++;
    }
}

echo "A quantidade de letras 'a' na frase é de : $count <br>";
