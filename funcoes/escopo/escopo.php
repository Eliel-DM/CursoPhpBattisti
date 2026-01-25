<?php
$a = 10;
function testeEscopo()
{
    $a = 5;

    echo "ESCOPO LOCAL DE A: $a <br>";
}

testeEscopo();
echo "ESCOPO GLOBAL DE A: $a  <br>";
