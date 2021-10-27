<?php

    session_start();
    include("Conexao.php");

?>

<html>

    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/rodapehA.css">
    </head>

    <body>

        <br><br><br>
        <div id="main-container">
            <h1>Acesse sua Conta</h1>

            <?php 
            
                if(isset($_SESSION['msg_login'])){
                    echo $_SESSION['msg_login'];
                    unset($_SESSION['msg_login']);
                }
            
            ?>

            <form id="register-form" action="login.php" method="POST">
                <div class="full-box">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Informe o seu e-mail" required>
                </div>
                <div class="full-box">
                    <label for="senha">Senha:</label>
                    <input type="senha" name="senha" id="senha" placeholder="Informe uma senha" required>
                </div>

                <div class="full-box">
                <input id="btn-submit" type="submit" value="Entrar">
                </div>

                <div class="texto">
                    <h5>Não possue conta?</h5>
                    <a href="Cadastro_usu.php">Cadastre-se</a>
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

            .texto{
                margin: auto;
                text-align: center;
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

        <br><br>
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