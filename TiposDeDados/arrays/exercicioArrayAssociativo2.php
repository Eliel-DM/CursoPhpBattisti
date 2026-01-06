<?php

/*  
    Crie um arquivo php;
    Crie um array associativo com características de uma pessoa;
    desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja.

*/

$arrayCaracteristicasPessoa = ['nome' => "Eliel", 'idade' => 18, 'Naturalidade' => "Brasileiro"];

$idade = $arrayCaracteristicasPessoa['idade'];
$nome = $arrayCaracteristicasPessoa['nome'];

if ($idade >= 18) {
    echo "O $nome é maior de idade!";
} else {
    echo "O $nome é menor de idade!";
}
