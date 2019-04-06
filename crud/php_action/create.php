<?php
//sessão
session_start();
//conexão
require_once "db_connect.php";

//verificanso se há indice vindo de post
if(isset($POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    //inserir dados no banco de dados

    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome','$email','$idade')";

    //verificar se deu certo a query
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    endif;        
endif;    