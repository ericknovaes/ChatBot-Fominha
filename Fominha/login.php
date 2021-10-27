<?php

    session_start();
    include("Conexao.php");

    if(empty($_POST['email']) || empty($_POST['senha'])){

        header('Location: login_usu.php');
        exit();

    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT EMAIL, SENHA FROM usuario WHERE EMAIL = '{$email}' and SENHA = md5('{$senha}');";

    $result = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($result);

    if($row == 1){

        header("Location: Acai.html");
        exit();

    }else{

        $_SESSION['msg_login'] = "<p style='color: red;'>E-mail ou senha incorretos!</p>";
        header("Location: login_usu.php");
        exit();

    }

?>