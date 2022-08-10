<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "secretaria@demolayceara.org.br";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['nome'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
$email = $_POST['email'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$assunto = "Contato do site";
//4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>" . $nome;
$mensagem .= "<br> <strong>E-mail:  </strong>" . $email;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
    . $_POST['mensagem'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  demolayceara.org.br<suporte@demolayceara.org.br>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <suporte@demolayceara.org.br>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
$headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
$headers .= "Return-Path:  <suporte@demolayceara.org.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

$envio = mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

if ($envio) {
    header("Location: localhost?page=fale_conosco&email=enviado");
    die();
} else {
    header("Location: localhost?page=fale_conosco&email=naoenviado");
    die();
}
