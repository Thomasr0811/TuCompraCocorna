<?php

session_start();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentarios = $_POST['comentarios'];

$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);   

$sql = "UPDATE tiendas SET nombre='$nombre',telefono='$telefono',direccion='$direccion',categoria='$categoria',comentarios='$comentarios' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {

    echo "Exito al actulizar los datos";
}
else {

   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location: login.php");

?>
