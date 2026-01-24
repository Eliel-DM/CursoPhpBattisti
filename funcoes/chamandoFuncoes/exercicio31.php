<?php

/*
    Crie um array com strings;
    Utilize a função implode no array;
    Primeiro argumento :" , ";
    Segundo argumento : O seu array;
    atribua a invocação da função a uma variável
    exiba o resultado;
 */


$arrayDeNomes = ["Eliel", "Pedro", "Matheus", "Teste", "Joaquim"];

$resultadoImplode = implode(", ", $arrayDeNomes);
echo $resultadoImplode;
