<?php

$pessoa = new class() {

    public $nome = "Eliel";

    public function dizerNome()
    {
        echo "Olá meu nomre é $this->nome";
    }
};

echo $pessoa->nome . "<br>";
$pessoa->dizerNome();
