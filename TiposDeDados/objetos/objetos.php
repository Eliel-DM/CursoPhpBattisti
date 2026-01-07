<?php

class Pessoa
{

    function falar()
    {
        echo "Olá";
    }
}

$eliel = new Pessoa();

$eliel->nome = "Eliel";

echo $eliel->nome;
echo "<br>";

$eliel->falar();
