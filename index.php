<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um E-mail de <b>teste</b>!</p>", "teste@teste.com", "Teste da Silva", "testeserver@teste.com", "Teste");