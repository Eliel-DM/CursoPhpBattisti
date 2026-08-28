<?php

$host = "mysql-db";
$db = "curso_php";
$user = "root";
$pass = "root";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
