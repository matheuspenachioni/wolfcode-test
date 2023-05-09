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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<div class="container">
    <h1 class="text-center">Listagem de Usuários</h1>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="insert.php" class="btn btn-primary">Novo usuário</a>
    </div>

    <table class="table table-striped mt-4">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th colspan="2">Ações</th>
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
                <td><a href="edit.php?id=<?=$user['id'];?>" class="btn btn-primary"><i class="fal fa-edit"></i> Editar</a></td>
                <!-- Passa um parâmetro na URL do ID de user para saber quem estamos deletando -->
                <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDialog<?=$user['id'];?>"><i class="fal fa-trash"></i> Excluir</a></td>
            </tr>

            <!-- Dialog de confirmação -->
            <div class="modal fade" id="deleteDialog<?=$user['id'];?>" tabindex="-1" aria-labelledby="deleteDialogLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteDialogLabel">Confirme para prosseguir</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o usuário <?=$user['name'];?>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="delete.php?id=<?=$user['id'];?>" class="btn btn-danger">Excluir</a>
                    </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>