<?php

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Estudo com Alan</title>


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulário de
                        check-out</font></font></h2>
            <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bora codar
                        Alan.</font></font></p>
        </div>

        <div class="row g-5">
            <div class="col-md-10 col-lg-8">
                <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço
                            de Cobrança</font></font></h4>
                <form class="needs-validation" id="form-dados" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label  for="firstName" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Primeiro nome</font></font></label>
                            <input name="primeiroNome" type="text" class="form-control" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Sobrenome</font></font></label>
                            <input  name="segundoNome" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Nome do usuário</font></font></label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">@</font></font></span>
                                <input type="text" class="form-control" id="username" placeholder="Nome do usuário"
                                       required="">
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Email </font></font><span
                                        class="text-muted"><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">(opcional)</font></font></span></label>
                            <input type="email" class="form-control" id="email" placeholder="voce@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Endereço</font></font></label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Endereço 2 </font></font><span
                                        class="text-muted"><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">(opcional)</font></font></span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartamento ou suite">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">País</font></font></label>
                            <select class="form-select" id="country" required="">
                                <option value=""><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">Escolher...</font></font></option>
                                <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estados
                                            Unidos</font></font></option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Estado</font></font></label>
                            <select class="form-select" id="state" required="">
                                <option value=""><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">Escolher...</font></font></option>
                                <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Califórnia</font></font>
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Fecho eclair</font></font></label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">O endereço de entrega é igual ao meu endereço
                                    de cobrança</font></font></label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">Guarde esta informação para a próxima
                                    vez</font></font></label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pagamento</font></font>
                    </h4>

                    <div class="my-3">
                        <div id="form-pagamento" class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked=""
                                   required="">
                            <label class="form-check-label" for="credit"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Cartão de crédito</font></font></label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="debit"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Cartão de débito</font></font></label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="paypal"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">PayPal</font></font></label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Nome no cartão</font></font></label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Nome completo conforme exibido no
                                        cartão</font></font></small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Número do Cartão de
                                        Crédito</font></font></label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Vencimento</font></font></label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">CVV</font></font></label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" onclick="enviarDados()" type="button"><font
                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">Continue para
                                finalizar a compra</font></font></button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017–2021 Nome
                    da empresa</font></font></p>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    function enviarDados() {


        $.ajax({
            url: 'primeiroAjax.php',
            type: "POST",
            data: $('#form-dados').serialize(),
            success: function (retorno) {
                alert(retorno);
            }
        });
    }


</script>
