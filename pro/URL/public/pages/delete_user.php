<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('usuarios', 'id', $id);

if($deletado) {

    flash('mensagem', "Usuario deletado com sucesso!", "success");

    return redirectToHome();
}

flash('mensagem', "Usuario não foi deletado!");

redirectToHome();