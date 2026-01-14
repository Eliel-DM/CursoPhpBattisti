<?php


echo 5 / 2; // Vai gerar um Float.
echo "<br>";

if (is_float(5 / 2)) { // Os números operados são inteiros mas o valor final é alterado para FLOAT.
    echo "É float <br>";
}


if (is_string(5 . 5)) { // Os valores concatenados são inteiros, mas ao final é gerado uma String.
    echo "É String <br>";
}
