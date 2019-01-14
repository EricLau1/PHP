<?php


require '../../../bootstrap.php';


if(isEmpty()) {

    flash("mensagem", "Preencha todos os dados!");

    return redirect('contato');

}

$validate = validate([
    "nome" => 's',
    "email" => 'e',
    "assunto" => 's',
    "mensagem" => 's'
]);


$data = [
    'quem' => $validate->email, // quem esta enviando o email
    'para' => 'ericlau.oliveira@gmail.com', // quem ira receber o email
    'assunto' => $validate->assunto, // assunto do email
    'mensagem' => $validate->mensagem // mensagem principal
];

if(send($data)) {
    
    flash('mensagem', 'Email enviado com sucesso!', 'info');
   
} else {

    flash('mensagem', 'Email não foi enviado.', 'warning');
   
}

redirect('contato');
