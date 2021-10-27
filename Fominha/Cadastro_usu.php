<?php

    session_start();
    include("Conexao.php");

?>

<html>

    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/rodapehA.css">
    </head>

    <body>

        <br><br>
        <div id="main-container">
            <h1>Cadastro de Usuário</h1>

            <?php 
            
                if(isset($_SESSION['msg_email'])){
                    echo $_SESSION['msg_email'];
                    unset($_SESSION['msg_email']);
                }
                if(isset($_SESSION['msg_senha'])){
                    echo $_SESSION['msg_senha'];
                    unset($_SESSION['msg_senha']);
                }
                if(isset($_SESSION['msg_telefone'])){
                    echo $_SESSION['msg_telefone'];
                    unset($_SESSION['msg_telefone']);
                }
            
            ?>

            <form id="register-form" action="Cadastrar.php" method="POST">
                <div class="full-box">
                    <label for="usuario">Usuário:</label>
                    <input type="usuario" name="usuario" id="usuario" placeholder="Informe o seu nome" maxlength="100" required>
                </div>
                <div class="full-box">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Informe o seu e-mail" maxlength="50" required>
                </div>
                <div class="half-box spacing">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" name="telefone" id="telefone" placeholder="Ex: (99) 99999-9999" maxlength="20" required>
                </div>
                <div class="half-box spacing">
                    <label for="endereco">Endereço:</label>
                    <input type="endereco" name="endereco" id="endereco" placeholder="Avenida/Rua" maxlength="40" required>
                </div>
                <div class="half-box spacing">
                    <label for="bairro">Bairro:</label>
                    <input type="bairro" name="bairro" id="bairro" placeholder="Informe seu Bairro" maxlength="30" required>
                </div>
                <div class="half-box spacing">
                    <label for="numero">Número:</label>
                    <input type="numero" name="numero" id="numero" placeholder="Informe o número da casa" maxlength="10" required>
                </div>
                <div class="full-box">
                    <label for="complemento">Complemento:</label>
                    <input type="complemento" name="complemento" id="complemento" placeholder="Ex: Apto, Casa..." maxlength="20" required>
                </div>
                <div class="half-box spacing">
                    <label for="senha">Senha:</label>
                    <input type="senha" name="senha" id="senha" placeholder="Informe uma senha" maxlength="32" required>
                </div>
                <div class="half-box spacing">
                    <label for="conf_senha">Confirmar Senha:</label>
                    <input type="conf_senha" name="conf_senha" id="conf_senha" placeholder="Confirme sua senha" maxlength="32" required>
                </div>

                <div class="full-box">
                <input id="btn-submit" type="submit" value="Cadastrar">
                </div>
            </form>
        </div><br><br>

        <style>
            /* geral */

            * {
                margin: 0;
                font-family: Arial;
                color: #323232;
                border: none;
            }

            input, label {
                outline: none;
                width: 100%;
            }

            body {
                background-color: rgb(89, 14, 119);
            }

            #main-container {
                width: 500px;
                margin: auto;
                background-color: #FFF;
                border-radius: 10px;
                padding: 25px;
            }

            #main-container h1 {
                text-align: center;
                margin-bottom: 25px;
                font-size: 1.6rem;
            }

            form {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .full-box {
                flex: 1 1 100%;
                position: relative;
            }

            .half-box {
                flex: 1 1 45%;
                position: relative;
            }

            .spacing {
                margin-right: 2.5%;
            }

            input[type="submit"] {
                background-color: #c95beb;
                color: #FFF;
                border: none;
                border-radius: 20px;
            }

            input {
                border-bottom: 2px solid #c95beb;
                padding: 10px;
                font-size: .9rem;
                margin-bottom: 40px;
            }

            input:focus {
                border-color: rgb(79, 49, 214);
            }

        </style>

        <footer>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Desenvolvido por <a target="_blank">Fominha</a> &copy; 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script> 

    </body>

</html>