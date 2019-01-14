<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()) {

    flash("mensagem", "Preencha todos os dados!");

    return redirect("edit_user&id={$id}");

}

$validate = validate([
    "nome" => 's',
    "sobrenome" => 's',
    "email" => 'e'
]);

try {

    $atualizado = update('usuarios', $validate, ['id', $id] );

} catch(PDOException $e) {

    echo "ERRO: ". $e->getMessage();

}


if($atualizado) {

    flash('mensagem', 'Usuário atualizado com sucesso!', 'info');

    return redirect("edit_user&id={$id}");

} 

flash('mensagem', 'Erro ao atualizar.');

redirect("edit_user&id={$id}"); 