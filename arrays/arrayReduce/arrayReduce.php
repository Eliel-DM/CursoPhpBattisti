<?php

$arr = [1, 2, 3, 12, 31, 23, 3, 12, 31, 24, 34, 12, 41, 24124];

function soma($a, $b)
{
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo $resultado . "<br>";
