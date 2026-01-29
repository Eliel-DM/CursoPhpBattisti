<?php

/*
    Converta a seguinte array para uma string:
    ["O","PHP","é","muito","legal"]
*/

$phpIsCool = ["O","PHP","é","muito","legal"];

$convertString = implode(" ", $phpIsCool);

echo $convertString . "<br>";