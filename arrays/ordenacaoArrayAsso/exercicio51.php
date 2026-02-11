<?php

/*
    Crie um array associativo em chaves com valor de nomes, e valores com uma pontuação;
    Ordene os dados do maior para o menor;
    Exiba uma lista, simulando um ranking, em HTML;
*/

$ranking = [
    "Eliel" => 200,
    "João" => 54,
    "Pedro" => 444,
    "Maria" => 239,
    "Joana" => 123,
    "Henrique" => 12
];

arsort($ranking);

?>

<h1>Ranking: </h1>
<ol>
    <?php foreach ($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?></li>
    <?php endforeach ?>
</ol>