<?php


$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

$table = "itens";
$nome = "Xícara";
$descricao = "É uma xícara usada de cor rosa";

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
$q = "INSERT INTO $table (nome,descricao) VALUES ('$nome','$descricao')";

$conn->query($q);
$conn->close();
