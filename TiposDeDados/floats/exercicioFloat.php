<?php

/* 
    Crie um arquivo php;
    Imprima três floats;
    Utilize a função is_float em um deles;
*/

$number = 2.6;
$number2 = 21.5;
$number3 = 123.5;

echo $number, "<br>", $number2, "<br>", $number3, "<br>";

if (is_float($number)) {
    echo "O número: ", $number, " é um float";
}
