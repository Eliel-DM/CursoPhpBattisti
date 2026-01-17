<?php

/*
    Verifique as seguintes operações com OR;
    12 < 5 OR "João" === "João";
    1 > 5 OR 1;
    20 === "20" AND 51 >= 31;
 */

if (12 < 5 ||  "João" === "João") {
    echo "As validações resultam em true 1 <br>";
}


if (1 > 5 || 1) {
    echo "As validações resultam em true 2 <br>";
}

if (20 === "20" && 51 >= 31) {
    echo "As validações resultam em true 3 <br>";
}
