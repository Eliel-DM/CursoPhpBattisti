<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);


//Conteúdo da aula
$id = 9;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
}
