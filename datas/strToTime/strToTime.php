<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dezDias = strtotime("10 days");

echo $dezDias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincoDias);

echo $dataAtualMais5 . "<br>";

$dataAtualMais10 = date('d/m/y', $dezDias);

echo $dataAtualMais10 . "<br>";
