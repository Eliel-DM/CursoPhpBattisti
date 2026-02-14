<?php

/*
    Crie uma classe Humano com algumas propriedades e método falar;
    Crie uma outra classe Professor que herda de humano, crie também 
    as propriedades e métodos particulares desta classe;
    Exiba os valores das propriedades da classe pai e também utilize os métodos;
    
*/

class Aluno
{

    protected $nome = null;
    protected $idade  = null;

    function getNomeAluno()
    {
        return $this->nome;
    }

    function setNomeAluno($nome)
    {
        $this->nome = $nome;
    }

    function getIdadeAluno()
    {
        return $this->idade;
    }

    function setIdadeAluno($idade)
    {
        $this->idade = $idade;
    }

    function aprenderConteudo()
    {
        echo "O $this->nome, tem $this->idade anos e está Estudando o conteúdo <br>";
    }
}


class Professor extends Aluno
{
    private  $CREDENCIAL_DE_PROFESSOR = "a13s135fgaS~]/";

    public function getCredencial()
    {
        return $this->CREDENCIAL_DE_PROFESSOR;
    }

    function ensinarConteudo()
    {
        echo "O $this->nome, tem $this->idade anos e está Ensinando o conteúdo <br>";
    }
}

$eliel = new Professor;

$eliel->setNomeAluno("Eliel");
$eliel->setIdadeAluno(90);

$eliel->aprenderConteudo();
$eliel->ensinarConteudo();

echo $eliel->getCredencial() . "<br>";
