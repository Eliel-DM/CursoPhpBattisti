<?php


$x = 10;
echo $x, "global <br>";



function exemplo()
{

    $x = 5;
    echo $x, "local <br>";
}

exemplo();
