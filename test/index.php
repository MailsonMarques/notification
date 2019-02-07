<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.teste.br", "sender@email.com", "teste123", "tls", '587', "recebi@email.com", "Mailson");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um E-mail de <b>teste</b>!</p>", "teste@teste.com", "Teste da Silva", "testeserver@teste.com", "Teste");