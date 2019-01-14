<a href='?page=cadastro' class='btn btn-link'> Cadastro </a>

<h2>Página inicial</h2>

<?=get("mensagem");?>

<table class="table table-striped">

    <thead class="table-borderless">
        <th> Id </th>
        <th> Nome </th>
        <th> Sobrenome </th>
        <th> Email </th>
    </thead>

    <tbody>
        
        <?php
            
            $usuarios = findAll('usuarios');

            foreach($usuarios as $user):
        
        ?>

        <tr>
            <td><?=$user->id; ?></td>
            <td><?=$user->nome; ?></td>
            <td><?=$user->sobrenome; ?></td>
            <td><?=$user->email; ?></td>
            <td>
                <a href="/?page=edit_user&id=<?=$user->id;?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Editar
                </a>
            </td>
            <td>
                <a href="/?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Deletar
                </a>
            </td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>
