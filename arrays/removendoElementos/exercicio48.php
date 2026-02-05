<?php

/*
    Crie um array com os valores: batata, maça, pera, feijão, arroz;
    Remove pera e feijão;
*/

$arr = ["batata","maça","pera","feijão","arroz"];
array_splice($arr,2,2);

print_r($arr);