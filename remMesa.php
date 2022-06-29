<?php
    $numMesa = trim($_GET['num_mesa']); 

   include 'db-conn.php';

    if (!empty($numMesa) ){
        $sql = "DELETE from mesa WHERE num_mesa=$numMesa";
        if(mysqli_query($conn, $sql)){
            $msg = "Dados excluídos com sucesso!";
        }
        else $msg ="Erro ao excluir usuário". $numMesa;
    }

    header("location:listarMesa.php?msg=$msg"); 

?>