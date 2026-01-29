<?php

/*
    Converta a seguinte string para array;
    carro - navio - helicóptero - barco - jangada
*/

$stringPrincipal = "carro - navio - helicóptero - barco - jangada";

$arrayDeStrings = explode("-", $stringPrincipal);

print_r($arrayDeStrings);
