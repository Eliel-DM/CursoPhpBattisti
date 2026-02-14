<?php

class Humano
{
    public $idade = 29;


    public function falar()
    {
        echo "Olá Mundo! <br>";
    }
    private function gritar()
    {
        echo "PHP é brabo <br>";
    }
    public function getGritar()
    {
        $this->gritar();
    }
    protected function falarBaixinho()
    {
        echo "uashuasuhauhsuhas <br>";
    }
    public function acessarFalarBaixinho()
    {
        $this->falarBaixinho();
    }
}


class Programador extends Humano
{
    public function acessarFalarBaixinhoProgramador()
    {
        $this->falarBaixinho();
    }
}

$ze = new Humano;
$ze->falar();
$ze->getGritar();
$ze->acessarFalarBaixinho();

$eliel = new Programador;

echo $eliel->idade . "<br>";
$eliel->falar();
$eliel->getGritar();
$eliel->acessarFalarBaixinhoProgramador();
