<?php

    session_start();
    include("Conexao.php");

    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $senha = md5($_POST['senha']);
    $verif_senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    if(strcmp($verif_senha, $conf_senha) != 0){

        $_SESSION['msg_senha'] = "<p style='color: red;'>As senhas estão diferentes!</p>";
        header("Location: Cadastro_usu.php");
        exit();

    }

    $query = "SELECT EMAIL FROM usuario WHERE EMAIL = '{$email}';";
    $verifica = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($verifica);

    if($row == 1){

        $_SESSION['msg_email'] = "<p style='color: red;'>E-mail já cadastrado!</p>";
        header("Location: Cadastro_usu.php");
        exit();

    }

    $query_tel = "SELECT TELEFONE FROM usuario WHERE TELEFONE = '{$telefone}';";
    $verifica_tel = mysqli_query($mysqli, $query_tel);

    $row_tel = mysqli_num_rows($verifica_tel);

    if($row_tel == 1){

        $_SESSION['msg_telefone'] = "<p style='color: red;'>Telefone já cadastrado!</p>";
        header("Location: Cadastro_usu.php");
        exit();

    }

    $dados = "INSERT INTO usuario(NOME, EMAIL, TELEFONE, ENDERECO, BAIRRO, NUMERO, COMPLEMENTO, SENHA) 
    VALUES ('$nome', '$email', '$telefone', '$endereco', '$bairro', '$numero', '$complemento', '$senha');";
        
    $insert = mysqli_query($mysqli, $dados);

    if(mysqli_insert_id($mysqli)){

        header("Location: Acai.html");

    }else{

        header("Location: Cadastro_usu.php");
        exit();

    }

?>