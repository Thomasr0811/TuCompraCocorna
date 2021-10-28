<?php
//variables de conexion base de datos
$servername = "localhost";
$username = "root";
$database = "cocorna";
$password = "";

//conexion base de datos
$conn = mysqli_connect($servername, $username, $password, $database);
//variables
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentarios = $_POST['comentarios'];


$sql = "INSERT INTO tiendas (nombre,telefono,direccion,categoria,comentarios)
VALUES ('$nombre','$telefono','$direccion','$categoria','$comentarios')";


if(mysqli_query($conn, $sql)){

 echo "Exito al guardar datos";
}
else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("location: ../index.php")




?>