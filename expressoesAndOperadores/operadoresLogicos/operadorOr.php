<?php

if (5 > 2 || 3 < 4) { // true or true
    echo "A operação 1 é verdadeira <br>";
}

if (5 > 10 || 3 < 4) { // false or true
    echo "A operação 1 é verdadeira <br>";
}

if (5 > 2 || 3 < 0) { // true  or false
    echo "A operação 1 é verdadeira <br>";
}

if (5 > 20 || 3 > 10) { // false  or false
    echo "A operação 1 é verdadeira <br>";
}
