<?php

require '../database_conn.php';

// Varíavel nome busca um input chamado NAME de um form POST
$name = filter_input(INPUT_POST, 'name');

// Varíavel email busca um input chamado EMAIL de um form POST
$email = filter_input(INPUT_POST, 'email');

// Varíavel password busca um input chamado PASSWORD de um form POST
$password = filter_input(INPUT_POST, 'password');

/* Varíavel sql chama a varíavel pdo criada no arquivo de configuração
e prepara uma query personalizada */
$sql = $pdo->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)");

// Ligando os valores do formulário ao seus respectivos atributos
$sql->bindValue(':name', $name);
$sql->bindValue(':email', $email);
$sql->bindValue(':password', $password);

// Executa a query
$sql->execute();

header("Location: ../index.php");