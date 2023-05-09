<?php
    require 'database_conn.php';

    // Varíavel lista do tipo array
    $list = [];
    $sql = $pdo->query("SELECT * FROM users");

    // Se o retorno da varíavel sql for maior que zero é porque existe users
    if($sql->rowCount() > 0) {
        // Tudo o que estiver em sql será associado a varíavel list
        $list = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<h1>Listagem de Usuários</h1>
<a href="insert.php">Novo usuário</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <!--- foreach de list em user -->
    <?php foreach($list as $user) :?>
        <tr>
            <!-- Informamos qual campo queremos de user -->
            <td><?=$user['id'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['email'];?></td>
            <!-- Achei melhor não mostrar a senha por questões de segurança -->
            <!-- <td><?=$user['password'];?></td> -->
            <!-- Passa um parâmetro na URL do ID de user para saber quem estamos editando -->
            <td><a href="edit.php?id=<?=$user['id'];?>"><i class="fal fa-edit"></i> Editar</a></td>
            <!-- Passa um parâmetro na URL do ID de user para saber quem estamos deletando -->
            <td><a href="delete.php?id=<?=$user['id'];?>"><i class="fal fa-trash"></i> Excluir</a></td>
        </tr>
    <?php endforeach; ?>
</table>