<?php
$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$registros=mysqli_query($conn,"SELECT * FROM tiendas  WHERE id=".$_GET['id']."") or 
die("problemas en el select:".mysqli_error($conexion));



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Informacion de restaurante "La mayoria"</title>

  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/index.css" />

  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>

<body>
  <!--Header - menu-->
  <!--Header - menu-->
  <header>
    <div class="header-content">
      <a href="index.php" class="logo">
        <b>Tu compra <span>Cocorna</span></b>
      </a>
      <div class="menu" id="show-menu">
        <nav>
          <ul>
            <li class="menu-selected">
              <a href="index.html" class="text-menu-selected"> Inicio </a>
            </li>
            <li class="menu-selected">
              <a href="#openModal" class="text-menu-selected"> Registro </a>
            </li>
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
        <h3 class="titulo">Registra tu tienda!</h3>
        <p>
          Por favor diligencie los campos requeridos y nos contactaremos lo más pronto posible
        </p>
      </div>
      <form>
        <div>
          <label for="">Nombre de la tienda</label>
          <input type="text" placeholder="Tienda" />
        </div>
        <div>
          <label for="">Teléfono de contacto</label>
          <input type="text" placeholder="Tienda" />
        </div>
        <div>
          <label for="">Dirección de la tienda</label>
          <input type="text" placeholder="Tienda" />
        </div>
        <div>
          <label for="">Comentarios</label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
      </form>
    </div>
  </div>

  <!--Portada-->

  <div class="container-all" id="move-content">
    <div class="article-container-cover">
      <div class="container-info-cover">
        <?php
          while ($reg=mysqli_fetch_array($registros)) {
            

        ?>
        <h1>
        <?php
          echo $reg['nombre'];
         
        ?>
        </h1>
        <p>
        <?php echo $reg['comentarios'];?>
        </p>
      </div>
    </div>

    <div class="container-content">
      <article>
        <h1>Informacion general</h1>

        <p>Somo un negocio con un excelente servicio al cliente</p>


        <h1>Nuestros medios de contacto y ubicacion</h1>


        <p><strong>Telefono: </strong><?php echo $reg['telefono'];?></p>
        <p><Strong>Direccion: </Strong><?php echo $reg['direccion'];?></p>

        <?php
           } 
        ?>

        
        <h1>imagenes de nuestros platillos</h1>

        <img src="./img/articulos/comidasrapidas1.jpg" alt="" />

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ipsam
          nulla, neque necessitatibus porro quibusdam unde ipsa veritatis.
          Consequuntur voluptates, maxime magnam est facere tempora corporis
          ad voluptatibus dicta iure! ipsum dolor sit amet, consectetur
          adipisicing elit.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae
          id nam incidunt quam corrupti, vitae numquam aliquid qui, sit libero
          hic nesciunt iste repudiandae, quae debitis, deleniti cupiditate.
          Iste, iusto? ipsum dolor sit amet, consectetur adipisicing elit.
          Quos ipsam nulla, neque necessitatibus porro quibusdam unde ipsa
          veritatis. Consequuntur voluptates, maxime magnam est facere tempora
          corporis ad voluptatibus dicta iure! ipsum dolor sit amet,
          consectetur adipisicing elit.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ipsam
          nulla, neque necessitatibus porro quibusdam unde ipsa veritatis.
          Consequuntur voluptates, maxime magnam est facere tempora corporis
          ad voluptatibus dicta iure! ipsum dolor sit amet, consectetur
          adipisicing elit.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ipsam
          nulla, neque necessitatibus porro quibusdam unde ipsa veritatis.
          Consequuntur voluptates, maxime magnam est facere tempora corporis
          ad voluptatibus dicta iure! ipsum dolor sit amet, consectetur
          adipisicing elit.
        </p>
      </article>

      <div class="container-aside">
        <aside>
          <h2>nuestro establecimiento</h2>
        </aside>

        <aside>
          <img src="./img/articulos/comidasrapidas1.jpg" alt="" />
        </aside>

        <aside>
          <img src="./img/articulos/almacen1.jpg" alt="" />
        </aside>
      </div>
    </div>

    <div class="container-footer">
      <footer>
        <hr />
        <h4>
          © 2021 Thomas Ramirez Valencia - Todos los derechos reservados.
        </h4>
      </footer>
    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>