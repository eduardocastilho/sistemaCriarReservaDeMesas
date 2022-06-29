<?php
    include 'db-conn.php';
  
    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 
    $nome = trim($_POST['nome']);

    if (!empty($usuario) && !empty($senha) && !empty($nome)){
        $sql = "INSERT INTO usuario(usuario, senha, nome) VALUES ('$usuario', '$senha', '$nome')";

        if(mysqli_query($conn, $sql)){
            $msg = "Dados inseridos com sucesso!";
        }
        else $msg ="Erro ao criar usuário". $usuario;
    }

    header("location:listarUser.php?msg=".$msg); 

?>