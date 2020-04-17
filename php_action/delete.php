<?php 
    //conexão DB
    require_once 'db_connect.php';

    //inicia sessao
    session_start();

    if(isset($_POST['btn-deletar'])):

        $id = mysqli_escape_string($connect, $_POST['id']);
        
        $sql = "DELETE FROM clientes WHERE id = '$id' ";


        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Deletado com sucesso!";
           header('location: ../index.php');
        else:
            $_SESSION['mensagem'] = "ERRO ao deletar";
            header('location: ../index.php');
        endif; 
    endif;
?>