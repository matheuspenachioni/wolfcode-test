<?php

$pdo = new PDO("mysql:dbname=wolfcode;host=localhost:3306", "root", "");
$sql = $pdo->query('SELECT * FROM users');

$data = $sql->fetchAll();

print_r($data);