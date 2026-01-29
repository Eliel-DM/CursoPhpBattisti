<?php

$textoHtml = "<p>Testando parágrafo.</p><div>Um div</div><p>Outro parágrafo</p>";

echo $textoHtml;

$textoPuro = strip_tags($textoHtml);

echo $textoPuro;
