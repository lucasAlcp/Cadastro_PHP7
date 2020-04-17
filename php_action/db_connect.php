<?php
    //Conexão com o banco de dados

    //dados
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud";

    $connect = mysqli_connect($serverName,$username,$password,$db_name);
    mysqli_set_charset($connect,"utf8");
    if(mysqli_connect_error()):
        echo "ERRO na conexão: ".mysqli_connect_error();
    endif;
?>