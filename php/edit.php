<?php

$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);



$registros=mysqli_query($conn,"SELECT * FROM tiendas  WHERE id=".$_GET['id']."") or 
die("problemas en el select:".mysqli_error($conexion));


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
</head>

<body style="width:100vw;height:100vh;display: flex;flex-direction:column;align-items:center;justify-content:center">


    <div style="width: 500px;height: 500px;">
        <form action="edit_data.php" method="POST">
            
            <?php
            
            while ($reg=mysqli_fetch_array($registros)) {

            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label><?php ?>
                <input type="text" name="nombre" class="form-control" value="<?php echo$reg['nombre']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="<?php echo$reg['telefono']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="<?php echo$reg['direccion']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="categoria">
                    <option><?php echo$reg['categoria']; ?></option>
                    <option>restaurantes</option>
                    <option>Almacenes</option>
                    <option>Ferreterias</option>
                    <option>Supermercados</option>
                    <option>comidas rapidas</option>
                    <option>Papelerias</option>
                </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" 
                id="floatingTextarea" name="comentarios"><?php echo$reg['comentarios']; ?></textarea>
            </div>
            <input type="text" name="id" value="<?php echo$_GET['id']; ?>" hidden>
            <?php
            }
            ?>
            <hr>
            <button type="submit" class="btn btn-primary">Editar datos</button>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>