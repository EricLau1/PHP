<?php


require '../../../bootstrap.php';


if(isEmpty()) {

    flash("mensagem", "Preencha todos os dados!");

    return redirect('cadastro');

}

$validate = validate([
    "nome" => 's',
    "sobrenome" => 's',
    "email" => 'e',
    "senha" => 's'
]);

try {

    $cadastrado = create('usuarios', $validate);

} catch(PDOException $e) {
    echo "ERRO: ". $e->getMessage();
}

if($cadastrado) {

    flash('mensagem', 'Usuário cadastrado com sucesso!', 'info');

    return redirect('cadastro');

} 

flash('mensagem', 'Erro ao cadastrar.');

redirect('cadastro');