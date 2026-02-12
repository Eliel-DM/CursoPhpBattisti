<?php

class Car
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar()
    {
        echo "vraaaaummmmm <br>";
    }
}

$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

$ferrari->cor = "azul";

echo $ferrari->cor . "<br>";

$ferrari->ligar();
