<?php


/*
 Crie um array com alguns valores (Pelo menos 10) de tipos 
 de dados diferentes;
 Faça um loop while para exibir apenas os dados que são strings;
*/

$arrayList = ["Eliel", 10, 24.5, "Teste", true, 90, "Positivo", 901.23123, "Jackerson", "Percy"];
$arraySize = sizeof($arrayList) - 1;

while ($arraySize >= 0) {
    if (is_string($arrayList[$arraySize])) {
        echo $arrayList[$arraySize] . "<br>";
    }
    $arraySize--;
}
