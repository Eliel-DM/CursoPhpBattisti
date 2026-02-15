<?php

/*
Calculadora Simples
    Crie uma classe chamada Calculadora que tenha os seguintes métodos:

        somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
        subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
        multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
        dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.
*/

class Calculadora
{
    public function somar($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }

    public function subtrair($numero1, $numero2)
    {
        return $numero1 - $numero2;
    }

    public function multiplicar($numero1, $numero2)
    {
        return $numero1 * $numero2;
    }

    public function dividir($numero1, $numero2)
    {
        return $numero1 / $numero2;
    }
}
