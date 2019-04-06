<?php
//sessão
session_start();
//conexão
require_once "db_connect.php";

//verificanso se há indice vindo de post
if(isset($POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    //inserir dados no banco de dados

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$idade', idade = '$idade' WHERE id = '$id'";

    //verificar se deu certo a query
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../index.php');
    endif;        
endif;    