<?php

print_r($_POST);

if(empty($_POST['primeiroNome']))
    die('O primeiro nome é obrigatório');

if(empty($_POST['segundoNome']))
    die('O segundo nome é obrigatório');

if(empty($_POST['Usuário']))
    die('O Campo Nome do usuário é obrigatório');

if(empty($_POST['E-mail']))
    die('O Campo E-mail é obrigatório');

if(empty($_POST['Endereço']))
    die('O Campo Endereço é obrigatório');

if(empty($_POST['CEP']))
    die('O Campo CEP é obrigatório');

if(empty($_POST['NomeDoPagador']))
    die('O Campo Nome no cartão é obrigatório');

if(empty($_POST['NºCartão']))
    die('O Campo Cartão é obrigatório');

if(empty($_POST['NºCartão']))
    die('O Campo Cartão é obrigatório');

if(empty($_POST['VencimentoDoCartão']))
    die('O Campo Vencimento do Cartão obrigatório');

if(empty($_POST['CVV']))
    die('O Campo CVV do Cartão obrigatório');

return true;
