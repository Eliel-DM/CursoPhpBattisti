<?php

class Car
{

    public $rodas = 4;
    private  $pelicula = "Sem película";

    public function setPelicula($pelicula)
    {
        $this->pelicula = $pelicula;
    }
    public function getPelicula()
    {
        return $this->pelicula;
    }
}

$car1 = new Car;

class Mecanico
{
    public function alterarRodas(Car $carro, $newRodas)
    {
        $carro->rodas = $newRodas;
    }
    public function colocarPelicula(Car $carro, $pelicula)
    {
        $carro->setPelicula($pelicula);
    }
}


$eliel = new Mecanico;

// Alterando Rodas 
echo $car1->rodas . "<br>";
$eliel->alterarRodas($car1, 20);
echo $car1->rodas . "<br>";

// Alterando Película

echo $car1->getPelicula() . "<br>";
$eliel->colocarPelicula($car1, "Purplee Películe");
echo $car1->getPelicula() . "<br>";
