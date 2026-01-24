<?php

// Arquivos que não existem 
//include_once "teste.php"; // Retorna um Warning mas segue a execução

//Aqruivos que existem 
include_once "teste2.php";


// Arquivos que não existem
//require_once "teste.php"; // Retorna um erro fatal 

require_once "teste3.php";


?>

<p>Testando código!</p>