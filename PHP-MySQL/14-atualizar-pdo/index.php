<?php

$host = "mysql-db";
$db = "curso_php";
$user = "root";
$pass = "root";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


$id = 5;
$nome = "Teclado Microsoft";
$descricao = "Esse teclado é o bixo";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
