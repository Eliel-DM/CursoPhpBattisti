<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);


//Conteúdo da aula
$id = 4;

$smtm = $conn->prepare("SELECT * FROM itens WHERE id > ?");
$smtm->bind_param("i", $id);
$smtm->execute();


$result = $smtm->get_result();
$data = $result->fetch_all();

print_r($data);
