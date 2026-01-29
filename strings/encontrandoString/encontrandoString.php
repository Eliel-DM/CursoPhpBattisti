<?php

$str = "Estamos testando o método strpos, com o strpos podemos entrar strings";

$testeEncontrar = strpos ($str, "strpos");
echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos ($str, "Java");
echo "$testeEncontrar2 <br>";

if($testeEncontrar2 === false){
    echo "Palavra 'Java' não encontrada";
}