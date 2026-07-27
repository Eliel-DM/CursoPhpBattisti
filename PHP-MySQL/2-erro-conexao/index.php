<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo  "Erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error();
}
