<?php

$para = "secretaria@demolayceara.org.br";

$nome = $_POST['nome'];

$email = $_POST['email'];

$assunto = "Contato do site";

$mensagem = "<strong>Nome:  </strong>" . $nome;
$mensagem .= "<br> <strong>E-mail:  </strong>" . $email;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
    . $_POST['mensagem'];

if ($nome != null & $email != null & $mensagem != null) {

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  demolayceara.org.br<suporte@demolayceara.org.br>\n";

    $headers .= "X-Sender:  <suporte@demolayceara.org.br>\n";

    $headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
    $headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
    $headers .= "Return-Path:  <suporte@demolayceara.org.br>\n";

    $headers .= "MIME-Version: 1.0\n";

    $envio = mail($para, $assunto, $mensagem, $headers);

    if ($envio) {
        header("Location: /?page=fale_conosco&email=enviado");
        die();
    } else {
        header("Location: /?page=fale_conosco&email=naoenviado");
        die();
    }
} else {
    header("Location: /?page=fale_conosco");
    die();
}
