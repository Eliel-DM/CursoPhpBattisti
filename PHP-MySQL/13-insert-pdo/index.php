<?php

$host = "mysql-db";
$db = "curso_php";
$user = "root";
$pass = "root";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Assunto da aula 

$nome = "Suporte monitor";
$descricao = "O suporte está novo e na caixa ainda;";

$stmt = $conn->prepare("INSERT INTO itens (nome,descricao) VALUES (:nome, :descricao)");
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
