<?php

session_start();

$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$registros = mysqli_query($conn, "SELECT * FROM tiendas") or
    die("problemas en el select:" . mysqli_error($conexion));
    /* echo $_SESSION['usuario'];  */


?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../css/index.css" />
    <link rel="shortcut icon" href="../img/tienda.ico">


    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous" defer></script>
    <script src="../js/eliminar.js" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>panel</title>
</head>

<body>
    <!--Header - menu-->
    <header>
        <div class="header-content">
        <h1>Lista de tiendas registradas<strong></strong></h1>
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li class="menu-selected">
                            <a href="#openModal" class="text-menu-selected"> Crear nueva tienda </a>
                        </li>
                        <li class="menu-selected">
                        <a href="../index.php" class="text-menu-selected">Volver a la pagina principal</a>
</li>
<li class="menu-selected">
    <a href="destroy.php" class="text-menu-selected">Cerrar sesión</a>
</li>
    <br>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <div id="openModal" class="modalDialog">
        <div>
            <div class="">
                <a href="#close" title="Close" class="close">X</a>
                <h3 class="titulo">Haz una solicitud para registrar tu tienda.</h3>
                <p>
                    Por favor complete los siguientes datos requeridos para registrar su tienda en esta página.
                </p>
            </div>
            <form method="post" action="../php/registroTiendas.php" enctype="multipart/form-data">

                <div>
                    <label for="">Imagen de la tienda</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <label for="">Nombre de la tienda.</label>
                    <input type="text" placeholder="Tienda" required="" name="nombre" pattern="[a-zA-Z]+" />
                </div>
                <div>
                    <label for="">Teléfono de contacto</label>
                    <input minlength="4" maxlength="10 " type="text" name="telefono" placeholder="Telefono" required=""
                        pattern="[0-9]+" />
                </div>
                <div>
                    <label for="">Dirección de la tienda</label>
                    <input type="text" placeholder="Dirección" required="" name="direccion" />
                </div>
                <div>
                    <label for="">Categoria</label>
                    <select name="categoria">
                        <option value="restaurantes">Restaurantes</option>
                        <option value="almacenes">Almacenes</option>
                        <option value="ferreterias">Ferreterías</option>
                        <option value="supermercados">Supermercados</option>
                        <option value="comidas_rapidas">Comidas rápidas</option>
                        <option value="papeleria">Papelería</option>
                    </select>
                </div>
                <div>
                    <label for="">Pequeña descripción de la tienda</label>
                    <textarea id="" cols="20" rows="5" required="" name="comentarios"></textarea>
                </div>
                <button type="submit" class="card__button">Enviar</button>
            </form>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
    


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
                <?php while ($reg = mysqli_fetch_array($registros)) { ?>
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
                                <a href="delete.php?id=<?php echo $reg['id'] ?>" 
                                onclick="return confirmar_envio()" class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>

                                
                                
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
