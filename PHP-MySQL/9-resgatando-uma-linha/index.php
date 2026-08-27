<?php

$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

$id = 6;

$smtm = $conn->prepare("SELECT * FROM itens WHERE id = ?");
$smtm->bind_param("i", $id);
$smtm->execute();


$result = $smtm->get_result();
$item = $result->fetch_row();
print_r($item);
$conn->close();
