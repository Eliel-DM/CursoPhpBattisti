<?php

/*
    Crie uma classe Pessoa;
    Crie a propriedade nome e idade;
    E também um método andar;
*/

class Pessoa
{
    public $nome = "Eliel";
    public $idade = 30;

    function andar()
    {
        echo "Andando! <br>";
    }
}

$eliel = new Pessoa;

echo $eliel->nome . "<br>";
echo $eliel->idade . "<br>";

$eliel->andar();
