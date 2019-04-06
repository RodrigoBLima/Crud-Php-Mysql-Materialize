<?php
//sessão
session_start();
//conexão
require_once "db_connect.php";

//verificanso se há indice vindo de post
if(isset($POST['btn-deletar'])):
     $id = mysqli_escape_string($connect, $_POST['id']);
    //inserir dados no banco de dados

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    //verificar se deu certo a query
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente deletado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao excluir cliente";
        header('Location: ../index.php');
    endif;        
endif;    