<?php
/*
    Crie uma classe Cachorro;
    Crie o método latir e andar;
    Execute o método em novas instâncias da classe;
*/

class Cachorro
{

    function latir()
    {
        echo " - Cachorro latindo - <br>";
    }

    function andar()
    {
        echo " - Cachorro andando - <br>";
    }
}

$dog = new Cachorro;

$dog->andar();
$dog->latir();
