<?php

$host = "mysql-db";
$db = "curso_php";
$user = "root";
$pass = "root";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Assunto da Aula


$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE  id > :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($data);
