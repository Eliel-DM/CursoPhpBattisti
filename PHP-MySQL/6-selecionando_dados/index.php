<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);


$q = "SELECT * FROM itens";
$result = $conn->query($q);
$conn->close();

// Um resultado
$item = $result->fetch_assoc();
print_r($item);

// Todos os resultados
$itens = $result->fetch_all();
print_r($itens);
