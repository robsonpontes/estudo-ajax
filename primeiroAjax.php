<?php

print_r($_POST);

if(empty($_POST['primeiroNome']))
    die('O primeiro nome é obrigatório');

return true;
