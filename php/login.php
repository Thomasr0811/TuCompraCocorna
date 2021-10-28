<?php
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contrasena'] = $_POST['contrasena'];
// echo $usuario.$contrasena;


$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$registros = mysqli_query($conn, "SELECT * FROM user") or
    die("problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {

    if ($_SESSION['usuario'] == $reg['user']) {
        //echo "usuario correcto";
        if ($_SESSION['contrasena'] == $reg['password']) {
            //echo "contraseña correcta";







            $registros2 = mysqli_query($conn, "SELECT * FROM tiendas") or
                die("problemas en el select:" . mysqli_error($conexion));
?>

            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous" defer></script>
                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

                <title>panel</title>
            </head>

            <body>
                <h1>Lista de tiendas, Bienvenido: <strong><?php echo $_SESSION['usuario']; ?></strong></h1>
                <br>
                <a href="destroy.php" class="btn btn-danger">Salir</a>
                <br><br>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Comentarios</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($reg = mysqli_fetch_array($registros2)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $reg['id']; ?></th>
                                    <td><?php echo $reg['nombre']; ?></td>
                                    <td><?php echo $reg['telefono']; ?></td>
                                    <td><?php echo $reg['direccion']; ?></td>
                                    <td><?php echo $reg['categoria']; ?></td>
                                    <td><?php echo $reg['comentarios']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="edit.php?id=<?php echo $reg['id'] ?>" class="btn btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                

                
                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
            </body>

            </html>

<?php
        } else {
            echo "Error en el campo contraseña";
        }
    } else {
        echo "Error en el campo usuario";
        if ($_SESSION['contrasena'] == $reg['password']) {
            echo "contraseña correcta";
        } else {
            echo "Error en el campo contraseña";
        }
    }
}

?>