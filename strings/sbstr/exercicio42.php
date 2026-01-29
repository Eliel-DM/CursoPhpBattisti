<?php

/*
    Na frase "Cadê o meu queijo? Ele estava aqui em cima"
    Regate apenas a palavra queijo;
*/

$frase = "Cadê o meu queijo? Ele estava aqui em cima";
$queijo = substr($frase, 12, 6);

echo $queijo;
