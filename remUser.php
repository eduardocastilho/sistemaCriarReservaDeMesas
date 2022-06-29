<?php
    $id = trim($_GET['usuario_id']); 

   include 'db-conn.php';

    if (!empty($id) ){
        $sql = "DELETE from usuario WHERE usuario_id=$id";
        if(mysqli_query($conn, $sql)){
            $msg = "Dados excluídos com sucesso!";
        }
        else $msg ="Erro ao excluir usuário". $id;
    }

    header("location:listarUser.php?msg=$msg"); 

?>