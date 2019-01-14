<?php

// enviando email com PHPMailer
function send(array $data) {

    $email = new PHPMailer\PHPMailer\PHPMailer;

    $email->CharSet = 'UTF-8';

    $email->SMTPSecure = 'plain';

    $email->isSMTP();

    $email->Host = 'smtp.mailtrap.io'; // disponibilizado no site: https://mailtrap.io/

    $email->Port = 465; // disponibilizado no site: https://mailtrap.io/

    $email->SMTPAuth = true;

    $email->Username = '162eb270ce1dfb'; // disponibilizado no site: https://mailtrap.io/

    $email->Password = 'd73ab9d615c5f8'; // disponibilizado no site: https://mailtrap.io/

    $email->isHTML(true);

    $email->setFrom('ericlau.oliveira@gmail.com');

    $email->FromName = $data['quem']; // email do usario que esta enviando a mensagem

    $email->addAddress($data['para']); // email do site

    $email->Body = $data['mensagem']; // mensagem do email

    $email->Subject = $data['assunto']; // assunto do email

    $email->AltBody = 'Para ver este email tenha certeza de estar vendo em um programa que aceita ver HTML';

    $email->MsgHTML($data['mensagem']);

    return $email->send();

    // echo $email->ErrorInfo;

}

/* // enviar email atraves do PHP puro
function phpmail($dados) {

    // para qual email sera enviada a mensagem
    $to = "ericlau.oliveira@gmail.com";

    // assunto da mensagem
    $subject = $dados->assunto;

    // mensagem principal
    $message = $dados->mensagem;

    // cabeçalhos necessários para enviar o email
    $headers = "From: {$dados->email}" . "\r\n" . // Quem esta enviando
               "Reply-To: awecodes@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();


    return mail($to, $subject, $message, $headers);

} */