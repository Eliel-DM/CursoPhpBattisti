<?php


class Humano {}
class Animal {}

$marcos = new Humano;
$turca = new Animal;

class Professor extends Humano {}

if ($marcos instanceof Humano) {
    echo "Marcos é um humano <br>";
} else {
    echo "Marcos não é humano<br>";
}

if ($turca instanceof Humano) {
    echo "A Turca  é um humano <br>";
} else {
    echo "A Turca não é humano<br>";
}

$pedro = new Professor;

if ($pedro instanceof Humano) {
    echo "O pedro  é um  Humano<br>";
} else {
    echo "O pedro não é  Humano<br>";
}

if ($pedro instanceof Professor) {
    echo "O pedro  é um  Professor<br>";
} else {
    echo "O pedro não é  Professor<br>";
}
