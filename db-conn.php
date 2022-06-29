<?php

$sname= "localhost";
$username= "root";
$password = "";

$db_name = "dbreserva";

$conn = mysqli_connect($sname, $username, $password, $db_name);


if (!$conn) {
	echo "Falha na conexão!";
}


?>