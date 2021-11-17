<?php
$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM tiendas";

$registros=mysqli_query($conn,"SELECT * FROM tiendas") or 
die("problemas en el select:".mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Tu compra cocorna</title>

  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous" defer></script>
  <script src="js/script.js" defer></script>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="shortcut icon" href="./img/tienda.ico">
  <link rel="stylesheet" href="admin.html">

  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>

<body>
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
              <a href="index.php" class="text-menu-selected"> Inicio </a>
            </li>
            <li class="menu-selected">
              <a href="#openModal" class="text-menu-selected"> ¿quieres que tu tienda pertenezca a esta pagina? </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="icon-menu">
      <i class="fas fa-bars"></i>
    </div>
  </header>

  <!-- inicio modal formulario -->
  <div id="openModal" class="modalDialog">
    <div>
      <div class="">
        <a href="#close" title="Close" class="close">X</a>
        <h3 class="titulo">haz una solicitud para registrar tu tienda.</h3>
        <p>
          Por favor diligencie los campos requeridos y nos contactaremos lo más pronto posible.
        </p>
      </div>
      <form method="post" action="php/registroTiendas.php">
        <div>
          <label for="">Nombre de la tienda</label>
          <input type="text" placeholder="Tienda" required="" name="nombre"/>
        </div>
        <div>
          <label for="">Teléfono de contacto</label>
          <input minlength="4" maxlength="10 " type="text" name="telefono" placeholder="Telefono" required="" pattern="[0-9]+" />
        </div>
        <div>
          <label for="">Dirección de la tienda</label>
          <input type="text" placeholder="Dirección" required="" name="direccion" />
        </div>
        <div>
          <label for="">Categoria</label>
          <select name="categoria">
            <option value="restaurantes">restaurantes</option>
            <option value="almacenes">almacenes</option>
            <option value="ferreterias">ferreterias</option>
            <option value="supermercados">supermercados</option>
            <option value="comidas_rapidas">comidas rapidas</option>
            <option value="papeleria">papeleria</option>
          </select>
        </div>
        <div>
          <label for="">Comentarios</label>
          <textarea id="" cols="20" rows="7" required="" name="comentarios"></textarea>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
  <!-- fin modal formulario -->
  <!--Portada-->

  <div class="container-all" id="move-content">
    <div class="blog-container-cover">
      <div class="container-info-cover">
        <h1>¡Busca o descubre varias tiendas!</h1>
        <p>
          en esta pagina podras buscar entre las varias tiendas que estan en
          el municipio de cocorna.
        </p>
      </div>
    </div>
    <div class="container-post">
      <input type="radio" id="TODOS" name="categories" value="TODOS" checked />
      <input type="radio" id="restaurantes" name="categories" value="restaurantes" />
      <input type="radio" id="almacenes" name="categories" value="almacenes" />
      <input type="radio" id="ferreterias" name="categories" value="ferreterias" />
      <input type="radio" id="supermercados" name="categories" value="supermercados" />
      <input type="radio" id="comidas_rapidas" name="categories" value="comidas_rapidas" />
      <input type="radio" id="papeleria" name="categories" value="papeleria" />

      <div class="container-category">
        <label for="TODOS">TODOS</label>
        <label for="restaurantes">Restaurantes</label>
        <label for="almacenes">Almacenes</label>
        <label for="ferreterias">Ferreterias</label>
        <label for="supermercados">Supermercados</label>
        <label for="comidas_rapidas">Comidas rápidas</label>
        <label for="papeleria">papelerias</label>
      </div>

      <hr>

      <div class="posts">
       
        <div class="post" data-category="restaurantes">
          <div class="ctn-img">
            <img src="img/articulos/restaurante1.jpg" alt="" />
          </div>
          <h2 class="titulo">La Mayoría</h2>
          <h3><span class="subtitulo">Ubicada cerca del parque principal</span></h3>
          <a href="mayoria.html"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="restaurantes">
          <div class="ctn-img">
            <img src="img/articulos/restaurante2.jpg" alt="" />
          </div>
          <h2 class="titulo">Raices</h2>
          <h3><span class="subtitulo">parque principal</span></h3>
          <a href="raices.html"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="almacenes">
          <div class="ctn-img">
            <img src="img/articulos/almacen1.jpg" alt="" />
          </div>
          <h2 class="titulo">almacen "nombre</h2>
          <h3><span class="subtitulo">almacen con toda variedad de productos desde.... hasta...</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="almacenes">
          <div class="ctn-img">
            <img src="img/articulos/almacen1.jpg" alt="" />
          </div>
          <h2 class="titulo">almacen "nombre</h2>
          <h3><span class="subtitulo">almacen con toda variedad de productos desde.... hasta...</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="ferreterias">
          <div class="ctn-img">
            <img src="img/articulos/ferreteria1.jpg" alt="" />
          </div>
          <h2 class="titulo">Ferreteria manolito</h2>
          <h3><span class="subtitulo">aqui encontraras todo material para construccion y mas cosas </span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="ferreterias">
          <div class="ctn-img">
            <img src="img/articulos/ferreteria1.jpg" alt="" />
          </div>
          <h2 class="titulo">Ferreteria manolito</h2>
          <h3><span class="subtitulo">aqui encontraras todo material para construccion y mas cosas
            </span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="supermercados">
          <div class="ctn-img">
            <img src="img/articulos/supermercado1.jpg" alt="" />
          </div>
          <h2 class="titulo">super mercado la bomba</h2>
          <h3><span class="subtitulo">todos los productos de la canasta familiar</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="supermercados">
          <div class="ctn-img">
            <img src="img/articulos/supermercado1.jpg" alt="" />
          </div>
          <h2 class="titulo">super mercado la bomba</h2>
          <h3><span class="subtitulo">todos los productos de la canasta familiar</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="comidas_rapidas">
          <div class="ctn-img">
            <img src="img/articulos/comidasrapidas1.jpg" alt="" />
          </div>
          <h2 class="titulo">comidas rapidas altoque</h2>
          <h3><span class="subtitulo">todo tipo de comidas rapidas, hamburguesa, salchipapa y mucho
              mas</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="comidas_rapidas">
          <div class="ctn-img">
            <img src="img/articulos/comidasrapidas1.jpg" alt="" />
          </div>
          <h2 class="titulo">comidas rapidas altoque</h2>
          <h3> <span class="subtitulo">todo tipo de comidas rapidas, hamburguesa, salchipapa y mucho
              mas</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="papeleria">
          <div class="ctn-img">
            <img src="img/articulos/papeleria1.jpg" alt="" />
          </div>
          <h2 class="titulo">papeleria la esquinita</h2>
          <h3><span class="subtitulo">todo en utiles materias, impresiones y mucho mas</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <div class="post" data-category="papeleria">
          <div class="ctn-img">
            <img src="img/articulos/papeleria1.jpg" alt="" />
          </div>
          <h2 class="titulo">papeleria la esquinita</h2>
          <h3><span class="subtitulo">todo en utiles materias, impresiones y mucho mas</span></h3>
          <a href="#"><button>Ver más</button></a>
        </div>

        <?php
          while ($reg=mysqli_fetch_array($registros)) {
            
            // echo "Nombre de la tienda: ".$reg['nombre'];
            echo "<div class='post' data-category='".$reg['categoria']."'>
            <div class='ctn-img'>
              <img src='img/articulos/restaurante1.jpg'/>
            </div>
            <h2 class='titulo'>".$reg['nombre']."</h2>
            <h3><span class='subtitulo'>".$reg['comentarios']."</span></h3>
            <a href='php/tiendainfo.php?id=".$reg['id']."'><button>Ver más</button></a>
          </div>";
          }
        ?>
      </div>

      <div class="container-footer">
        <footer>
          <hr>
          <h4>
            © 2021 Thomas Ramirez Valencia - Todos los derechos reservados.
          </h4>
        </footer>
      </div>

    </div>
  </div>
  </div>
</body>

</html>