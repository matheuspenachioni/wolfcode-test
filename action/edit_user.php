<?php
    require '../database_conn.php';

    // Varíavel id busca uma entrada de dados chamado ID com método POST
    $id = filter_input(INPUT_POST, 'id');

    // Varíavel name busca uma entrada de dados chamado NAME com método POST
    $name = filter_input(INPUT_POST, 'name');

    // Varíavel email busca uma entrada de dados chamado EMAIL com método POST
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Varíavel password busca uma entrada de dados chamado PASSWORD com método POST
    $password = filter_input(INPUT_POST, 'password');
    
    // Varíavel para hash de password
    $hashPassword = password_hash($hashPassword, PASSWORD_DEFAULT);

    // Se houver id, name, email e password
    if($id && $name && $email && $password) {

        if(password_verify($password, $hashPassword)) {
            $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");
            // Ligando os valores do formulário ao seus respectivos atributos
            $sql->bindValue(':id', $id);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':password', $password);
            
            $sql->execute();
        } else {
            $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email, password = :hashPassword WHERE id = :id");
            // Ligando os valores do formulário ao seus respectivos atributos
            $sql->bindValue(':id', $id);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':hashPassword', $hashPassword);
            
            $sql->execute();
        }
        

        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit;
    }