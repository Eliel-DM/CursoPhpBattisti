<?php

$arr = [1,23,4,5,56,7,8,9];

$slice1 = array_slice($arr,0,3);

print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr,4,3);

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr,4);

print_r($slice3);
echo "<br>";