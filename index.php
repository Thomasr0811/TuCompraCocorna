<?php
$servername = "localhost";
$database = "cocorna";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM tiendas";

$registros=mysqli_query($conn,"SELECT * FROM tiendas") or 
die("problemas en el select:".mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Tu compra Cocorná</title>

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
        <b>Tu compra <span>Cocorná</span></b>
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

  <!-- inicio modal formulario -->
  <div id="openModal" class="modalDialog">
    <div>
      <div class="">
        <a href="#close" title="Close" class="close">X</a>
        <h3 class="titulo">Haz una solicitud para registrar tu tienda.</h3>
        <p>
        Por favor complete los siguientes datos requeridos para registrar su tienda en esta página.
        </p>
      </div>
      <form method="POST" action="https://formsubmit.co/ramirezthomas129@gmail.com" enctype="multipart/form-data">

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
  <!-- fin modal formulario -->
  <!--Portada-->

  <div class="container-all" id="move-content">
    <div class="blog-container-cover">
      <div class="container-info-cover">
        <h1>Busca y encuentra varias tiendas.</h1>
        <p>
        En esta página podrás buscar información de las varias tiendas que están ubicadas en
el municipio de Cocorná.
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
        <label for="TODOS">Todos</label>
        <label for="restaurantes">Restaurantes</label>
        <label for="almacenes">Almacenes</label>
        <label for="ferreterias">Ferreterías</label>
        <label for="supermercados">Supermercados</label>
        <label for="comidas_rapidas">Comidas rápidas</label>
        <label for="papeleria">Papelerías</label>
      </div>

      <hr>

      <div class="posts">
        
        <div class="post" data-category="restaurantes">
          <div class="ctn-img">
            <img src="img/articulos/restaurante1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">La Mayoría</h2>
          <h3><span class="subtitulo">Ubicada cerca del parque principal</span></h3>
          <a href="./libreria/mayoria.html" class="card__button"><button>Ver más</button></a>
          </div>
        </div>

        <div class="post" data-category="restaurantes">
          <div class="ctn-img">
            <img src="img/articulos/restaurante2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Casa Mexicana.</h2>
          <h3><span class="subtitulo">Parque principal</span></h3>
          <a href="./libreria/casa-mexicana.html"  class="card__button"><button>Ver más</button></a>
           </div>
        </div>

        <div class="post" data-category="almacenes">
          <div class="ctn-img">
            <img src="img/articulos/almacen1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Almacén ropa moda</h2>
          <h3><span class="subtitulo">Almacén con toda variedad de productos desde...hasta...</span></h3>
          <a href="./libreria/almacen1.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="almacenes">
          <div class="ctn-img">
            <img src="img/articulos/almacen2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Tenis sport</h2>
          <h3><span class="subtitulo">Almacén con toda variedad de productos desde.... hasta...</span></h3>
          <a href="./libreria/almacen2.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="ferreterias">
          <div class="ctn-img">
            <img src="img/articulos/ferreteria1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Ferretería Manolito</h2>
          <h3><span class="subtitulo">aquí encontrarás todo material para construcción y más cosas</span></h3>
          <a href="./libreria/ferreteria1.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="ferreterias">
          <div class="ctn-img">
            <img src="img/articulos/ferreteria2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">La ferretería</h2>
          <h3><span class="subtitulo">Aquí encontrarás todo material para construcción y más cosas.
            </span></h3>
          <a href="./libreria/ferreteria2.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="supermercados">
          <div class="ctn-img">
            <img src="img/articulos/supermercado1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Supermercado la bomba</h2>
          <h3><span class="subtitulo">Todos los productos de la canasta familiar</span></h3>
          <a href="./libreria/supermercado1.html"  class="card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="supermercados">
          <div class="ctn-img">
            <img src="img/articulos/supermercado2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Supermercado Buenos días </h2>
          <h3><span class="subtitulo">Todos los productos de la canasta familiar</span></h3>
          <a href="./libreria/supermercado2.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="comidas_rapidas">
          <div class="ctn-img">
            <img src="img/articulos/comidasrapidas1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Comidas rápidas al toque.</h2>
          <h3><span class="subtitulo">Todo tipo de comidas rápidas, hamburguesa, salchipapa y mucho más</span></h3>
          <a href="./libreria/comidas_rapidas1.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="comidas_rapidas">
          <div class="ctn-img">
            <img src="img/articulos/comidasrapidas2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Comidas rápidas Lily</h2>
          <h3> <span class="subtitulo">Todo tipo de comidas rápidas, hamburguesas, salchipapa y mucho más</span></h3>
          <a href="./libreria/comidas_rapidas2.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="papeleria">
          <div class="ctn-img">
            <img src="img/articulos/papeleria1.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Papelería la esquinita</h2>
          <h3><span class="subtitulo">Todo en útiles escolares,  impresiones y mucho más</span></h3>
          <a href="./libreria/papeleria1.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <div class="post" data-category="papeleria">
          <div class="ctn-img">
            <img src="img/articulos/papeleria2.jpg" alt="" />
          </div>
          <div class="centrar">
          <h2 class="titulo">Papelería</h2>
          <h3><span class="subtitulo">Todo en útiles escolares, impresiones y mucho más</span></h3>
          <a href="./libreria/papeleria2.html"  class= "card__button"><button>Ver más</button></a>
</div>
        </div>

        <?php
          while ($reg=mysqli_fetch_array($registros)) {
            
            // echo "Nombre de la tienda: ".$reg['nombre'];
            echo "<div class='post' data-category='".$reg['categoria']."'>
            <div class='ctn-img'>
              <img src='imagenes/".$reg['url_image']."'/>
            </div>
            <div class='centrar'>
            <h2 class='titulo'>".$reg['nombre']."</h2>
            <h3><span class='subtitulo'>".$reg['comentarios']."</span></h3>
            <a href='php/tiendainfo.php?id=".$reg['id']."' class='card__button'><button>Ver más</button></a>
            </div>
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
