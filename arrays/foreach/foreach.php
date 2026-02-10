<?php

$eliel = [

    'nome' => 'Eliel',
    'idade' => 29,
    'profissao' => 'HelpDesk'
];

$alexia = [
    'nome' => 'Aléxia',
    'idade' => 25,
    'profissao' => 'Eng. Civil'
];

foreach ($eliel as $carac => $value) {
    echo "$carac => $value <br>";
}

foreach ($alexia as $value) {
    echo " $value <br>";
}
