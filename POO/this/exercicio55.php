<?php

/*
    Crie uma classe Carro;
    Crie algumas propriedades e também a propriedade velocidade_maxima;
    Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
    E também o getValocidadeMaxima onde é possível imprimir a velocidade do carro;
*/

class Carro
{
    public $modelo;
    public $cor;
    public $velocidade_maxima = null;

    function getVelocidadeMaxima()
    {
        return $this->velocidade_maxima;
    }

    function setVelocidadeMaxima(int $velocidade)
    {
        $this->velocidade_maxima = $velocidade;
    }
}


$corsa = new Carro;

$corsa->modelo = "Corsa";
$corsa->cor = "Preto";

echo "O carrão é do modelo $corsa->modelo e a cor é $corsa->cor <br>";
echo "A velocidade máxima é: " . $corsa->getVelocidadeMaxima() . " KM/H<br>";

$corsa->setVelocidadeMaxima(2000);

echo "A  velocidade máxima é: " . $corsa->getVelocidadeMaxima() . " KM/H<br>";
