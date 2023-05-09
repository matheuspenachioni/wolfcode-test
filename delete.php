<?php
    require 'database_conn.php';

    // Varíavel id busca uma entrada de dados chamado ID com método GET
    $id = filter_input(INPUT_GET, 'id');

    //Se houver id
    if($id) {
        /* Varíavel sql chama a varíavel pdo criada no arquivo de configuração
        e prepara uma query para a consulta pelo id */ 
        $sql = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    header("Location: index.php");
