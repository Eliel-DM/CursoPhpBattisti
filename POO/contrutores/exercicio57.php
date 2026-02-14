<?php

/*

Crie uma classe Cachorro com propriedades;
Inicie as propriedades via constructor;
Cie um método para exibir cada uma das propriedades que você criou;

 */


class Cachorro
{
    public $nome;
    public $raca;
    public $idade;

    public function __construct($nome, $raca, $idade)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
    }

    public function getAllData()
    {
        echo "O nome do cachorro é: " . $this->nome . "<br>";
        echo "A raça do cachorro é: " . $this->raca . "<br>";
        echo "A idade do cachorro é: " . $this->idade . "<br>";
    }
}

$dara = new Cachorro("Dara", "RottWeiler", 5);

$dara->getAllData();
