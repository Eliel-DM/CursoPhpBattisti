<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);


//Conteúdo da aula
$nome = "Suporte de microfone";
$descricao = "O suporte é novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $descricao); // i = String, i = integer, d = double

$stmt->execute();
