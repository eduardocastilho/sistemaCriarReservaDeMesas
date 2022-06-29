<?php
    include 'menu.php'; 
    $numMesa = trim($_POST['numMesa']); 
    $nome = trim($_POST['nome']); 
    $qtdLugar = trim($_POST['qtdLugar']); 
    $telefone = trim($_POST['telefone']); 
    $dataHorario = trim($_POST['dataHorario']); 

    include 'db-conn.php';


    if (!empty($numMesa)){
        $sql = "UPDATE mesa SET num_mesa='$numMesa', nome='$nome', qtd_lugar='$qtdLugar', telefone='$telefone', data_horario='$dataHorario' WHERE num_mesa=$numMesa"; 

    
    if(mysqli_query($conn, $sql)){
        $msg = "Dados atualizados com sucesso!";
    }
    else {
        $msg ="Erro ao atualizar mesa ". $numMesa;
    }
}

    header("location:listarMesa.php?msg=$msg"); 

?>
