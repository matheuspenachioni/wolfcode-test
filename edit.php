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

<h1>Editar Usuário</h1>
<form action="action/edit_user.php" method="POST">
    <input type="hidden" name="id" value="<?=$user['id'];?>">
    <div>
        <label>Nome</label>
        <input type="text" name="name" value="<?=$user['name'];?>"/>
    </div>
    <div>
        <label>E-mail</label>
        <input type="email" name="email" value="<?=$user['email'];?>"/>
    </div>
    <div>
        <label>Senha</label>
        <input type="password" name="password" value="<?=$user['password'];?>"/>
    </div>
    <input type="submit" value="Salvar">
</form>