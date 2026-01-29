<?php

$str = "Está é um string muito grande, ela tem vários caracteres";


for ($i = 0; $i < strlen($str); $i++) {
    echo "$str[$i] <br>";
}
