<?php

require '../database_conn.php';

// Varíavel nome busca um input chamado NAME de um form POST
$name = filter_input(INPUT_POST, 'name');

// Varíavel email busca um input chamado EMAIL de um form POST
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// Varíavel password busca um input chamado PASSWORD de um form POST
$password = filter_input(INPUT_POST, 'password');

// Varíavel para hash de password
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

if($name && $email) {

    /* Varíavel sql chama a varíavel pdo criada no arquivo de configuração
    e prepara uma query para a consulta do email */ 
    $sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    // Se não houver nenhuma coluna com o mesmo email
    if($sql->rowCount() === 0) {
        /* Varíavel sql chama a varíavel pdo criada no arquivo de configuração
        e prepara uma query personalizada */
        $sql = $pdo->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :hashPassword)");
    
        // Ligando os valores do formulário ao seus respectivos atributos
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':hashPassword', $hashPassword);
    
        // Executa a query
        $sql->execute();
    
        // Volta para a página de listagem
        header("Location: ../index.php");
        exit;
    } else {
        // Volta para a página de insert
        header("Location: ../insert.php");
    }
} else {
    // Volta para a página de insert
    header("Location: ../insert.php");
    exit;
}


