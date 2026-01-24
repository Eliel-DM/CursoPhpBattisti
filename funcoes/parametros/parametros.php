<?php

function velocidadeMaxima($vel)
{

    echo "O carro atinge a velocidade máxima de $vel km/j <br>";
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);
velocidadeMaxima(500);



echo "Continuando teste <br>";

$velocidadeVar = 100;

velocidadeMaxima($velocidadeVar);
velocidadeMaxima("STRING");


//Mais parametros
function descreverAnimal($nome, $raca)
{
    echo  "O $nome é da $raca <br>";
}

descreverAnimal("Dara", "RotWiler");
