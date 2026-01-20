<?php

/*
    Crie um loop que vai até o número 30;
    O contador deve iniciar com 4;
    Faça incrementos de 2 em 2 no contador;
    Utilize o break para parar o loop quando chegar no  número 24;
*/
$contadorTemporario = 4;
while ($contadorTemporario < 30) {
    echo $contadorTemporario . "<br>";
    if ($contadorTemporario == 24) {
        break;
    }

    $contadorTemporario +=  2;
}
