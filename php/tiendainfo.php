<?php
$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password, $database);



$registros=mysqli_query($conn,"SELECT * FROM tiendas  WHERE id=".$_GET['id']."") or 
die("problemas en el select:".mysqli_error($conexion));



?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Informacion de tienda</title>

  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/index.css" />
  <link rel="shortcut icon" href="../img/tienda.ico">

  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>

<body>
  <!--Header - menu-->
  <!--Header - menu-->
  <header>
    <div class="header-content">
      <a href="../index.php" class="logo">
        <b>Tu compra <span>Cocorna</span></b>
      </a>
      <div class="menu" id="show-menu">
        <nav>
          <ul>
            <li class="menu-selected">
              <a href="#openModal" class="text-menu-selected"> Registra tu tienda </a>
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
        <h3 class="titulo">Haz una solicitud para registrar tu tienda.</h3>
        <p>
        Por favor complete los siguientes datos requeridos para registrar su tienda en esta página.
        </p>
      </div>
      <form method="post" action="../php/registroTiendas.php" enctype="multipart/form-data">

       <div>
          <label for="">Imagen de la tienda</label>
          <input type="file" name="image" multiple>
       </div>
        <div>
          <label for="">Nombre de la tienda.</label>
          <input type="text" placeholder="Tienda" required="" name="nombre" pattern="[a-zA-Z]+"/>
        </div>
        <div>
          <label for="">Teléfono de contacto</label>
          <input minlength="4" maxlength="10 " type="number" name="telefono" placeholder="Telefono" required="" pattern="[0-9]+" />
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
          <textarea id="" cols="20" rows="5" required="" name="comentarios"  ></textarea>
        </div>
        <button type="submit" class="card__button">Enviar</button>
      </form>
    </div>
  </div>

  <!--Portada-->

  <div class="container-all" id="move-content">
  <?php
          while ($reg=mysqli_fetch_array($registros)) {
            

        ?>
    <div class="article-container-cover imagen-mayoria" style="background-image:url('../imagenes/<?php echo $reg['url_image'];?>')">
      <div class="container-info-cover">
        
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

        <p>Somos un negocio con un excelente servicio al cliente</p>


        <h1>Nuestros medios de contacto y ubicacion</h1>


        <p><strong>Telefono: </strong><?php echo $reg['telefono'];?></p>
        <p><Strong>Direccion: </Strong><?php echo $reg['direccion'];?></p>

        <?php
           } 
        ?>

        
        <h1>imagenes de nuestros productos</h1>

        <img src="../img/imgcarga.jpg" alt="" />

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ipsam
          nulla, neque necessitatibus porro quibusdam unde ipsa veritatis.
          Consequuntur voluptates, maxime magnam est facere tempora corporis
          ad voluptatibus dicta iure! ipsum dolor sit amet, consectetur
          adipisicing elit.
        </p>
        <img src="../img/imgcarga.jpg" alt="" />
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
        <img src="../img/imgcarga.jpg" alt="" />
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
        <img src="../img/imgcarga.jpg" alt="" />
        </aside>

        <aside>
        <img src="../img/imgcarga.jpg" alt="" />
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
