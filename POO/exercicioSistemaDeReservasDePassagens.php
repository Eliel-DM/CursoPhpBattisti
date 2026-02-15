<?php
/*
Sistema de Reservas de Passagens

    Crie uma classe chamada Passenger que represente um passageiro.

    A classe Passenger deve ter os seguintes atributos:

        name: nome do passageiro.

        age: idade do passageiro.

        seatNumber: número do assento do passageiro.

    A classe Passenger deve ter os seguintes métodos:

        getName(): retorna o nome do passageiro.

        getAge(): retorna a idade do passageiro.

        getSeatNumber(): retorna o número do assento do passageiro.

        setSeatNumber($seatNumber): atualiza o número do assento do passageiro.
*/

class Passenger
{
    private $name;
    private $age;
    private $seatNumber;

    public function __construct($name, $age, $seatNumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    function getName()
    {
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function getSeatNumber()
    {
        return $this->seatNumber;
    }

    function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
}
