<?php
//variables de la conexion
$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";

// // Crear conexion
$conn = mysqli_connect($servername, $username, $password, $database);
//Variables que llegan desde el formulario por el metodo post
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentarios = $_POST['comentarios'];
$archivo = $_FILES['image']['name'];
$tipo = $_FILES['image']['type'];
$tamano = $_FILES['image']['size'];
$temp = $_FILES['image']['tmp_name'];

if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
    - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
 }
 else {
    //Si la imagen es correcta en tamaño y tipo
    //Se intenta subir al servidor
    if (move_uploaded_file($temp, '../imagenes/'.$archivo)) {
      
        //Mostramos el mensaje de que se ha subido co éxito
        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
        // echo $archivo;
        //Mostramos la imagen subida
        // echo '<p><img src="../imagenes/'.$archivo.'"></p>';
       
        
    }
    else {
       //Si no se ha podido subir la imagen, mostramos un mensaje de error
       echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
    }
  }
// echo "prueba: ".$nombre;
// echo "prueba: ".$telefono;
// echo "prueba: ".$direccion;
// echo "prueba: ".$comentarios;

$sql = "INSERT INTO tiendas (nombre,telefono,direccion,categoria,comentarios,url_image) 
VALUES ('$nombre','$telefono','$direccion','$categoria','$comentarios','$archivo')";

if (mysqli_query($conn, $sql)) {

      echo "Exito al guardar datos";
}
else {

     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("Location: ../index.php");

?>
