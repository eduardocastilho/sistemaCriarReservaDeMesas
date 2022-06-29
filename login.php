<?php 
session_start(); 
include "db-conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=Insira um nome de usuário válido");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Insira uma senha válida");
	    exit();
	}else{
		
		$sql = "SELECT * FROM usuario WHERE usuario='$username' AND senha='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $username && $row['senha'] === $pass) {
            	$_SESSION['usuario'] = $row['usuario'];
            	$_SESSION['nome'] = $row['nome'];
            	$_SESSION['usuario_id'] = $row['usuario_id'];
            	header("Location: menu.php");
		        exit();
            }else{
				header("Location: index.php?error=Usuário ou senha incorreto");
		        exit();
			}
		}else{
			header("Location: index.php?error=Usuário ou senha incorreto");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}