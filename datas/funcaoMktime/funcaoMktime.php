<?php

$dataNacimento = mktime(02, 12, 33, 04, 20, 2005);
echo $dataNacimento . "<br>";

$dataNascimetnoFormatada = date('d/m/Y', $dataNacimento);

echo $dataNascimetnoFormatada . "<br>";


$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
$dataFuturaFormatada = date('m/d/Y', $dataEspecifica);

echo $dataFuturaFormatada;
