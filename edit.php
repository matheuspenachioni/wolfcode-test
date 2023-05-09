<?php
    require 'database_conn.php';

    // Varíavel id busca uma entrada de dados chamado ID com método GET
    $id = filter_input(INPUT_GET, 'id');
    // Varíavel user do tipo array
    $user = [];

    //Se houver ID
    if($id) {
        /* Varíavel sql chama a varíavel pdo criada no arquivo de configuração
        e prepara uma query para a consulta pelo id */ 
        $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        // Se o retorno da varíavel sql for maior que zero é porque existe user com esse id
        if($sql->rowCount() > 0) {
            // O que estiver em sql será associado a varíavel user de forma separada
            $user = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            // Volta para a página de listagem
            header("Location: index.php");
            exit;
        }
    } else {
        // Volta para a página de listagem
        header("Location: index.php");
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<div class="container">
    <h1 class="text-center">Editar Usuário</h1>
    <form action="action/edit_user.php" method="POST">
        <input type="hidden" name="id" value="<?=$user['id'];?>"/>
        <div class="mb-3">
            <label class="form-label fw-bold">Nome</label>
            <input type="text" name="name" value="<?=$user['name'];?>" class="form-control"/>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">E-mail</label>
            <input type="email" name="email" value="<?=$user['email'];?>" class="form-control"/>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Senha</label>
            <input type="password" name="password" value="<?=$user['password'];?>" class="form-control"/>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" value="Salvar" class="btn btn-primary"><i class="fal fa-save"></i> Salvar</button>
            <a href="index.php" class="btn btn-danger"><i class="fal fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>