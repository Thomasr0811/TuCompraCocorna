<?php
session_start();

$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];

$consulta = "DELETE FROM tiendas WHERE id='$id'";

$result = mysqli_query($conn,$consulta);
header("Location: login.php");


?>
