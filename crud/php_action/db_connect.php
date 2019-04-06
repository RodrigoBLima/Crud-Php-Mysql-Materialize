<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

// fazendo conexão
$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

//verificando se tem erro
if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysql_connect_error();
endif;
