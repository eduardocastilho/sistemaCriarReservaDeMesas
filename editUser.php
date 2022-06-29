<?php
    include 'menu.php'; 
    $id = trim($_POST['id']); 
    $user = trim($_POST['usuario']); 
    $name = trim($_POST['nome']); 
    $pass = trim($_POST['senha']); 

    include 'db-conn.php';


    if (!empty($id)){
        $sql = "UPDATE usuario SET usuario='$user', nome='$name', senha='$pass' WHERE usuario_id=$id"; 

    if(mysqli_query($conn, $sql)){
        $msg = "Dados atualizados com sucesso!";
    }
    else {
        $msg ="Erro ao atualizar usuário". $usuario;
    }
}

    header("location:listarUser.php?msg=$msg"); 

?>
