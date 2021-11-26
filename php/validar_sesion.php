<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$servername = "localhost";
$database= "cocorna";
$username ="root";
$password="root";
$conn =mysqli_connect($servername, $username, $password, $database);

$registros = mysqli_query($conn, "SELECT * FROM user") or
die("problemas en el select" , mysqli_query_error($conn));

 while($reg = mysqli_fetch_array($registros)){

    if ($usuario == $reg['user']&&$contrasena ==$reg['password']){
session_start();
$_SESSION['usuario'] = $usuario;
header("location: login.php");

    }

}





?>
