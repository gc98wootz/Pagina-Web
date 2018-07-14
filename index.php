<?php
require_once "admin/modelo.php";

$avisos  = listar_avisos();


?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mochilas</title>
    <meta name="description" content="Sitio web para compra de mochilas">
    <meta name="keywords" content="mochilas , venta , avisos , precios menor,precio por marcas">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estiloH.css">

  </head>
  <body>
    <header>
      <div class="container">
        <div class="col-md-6">
          <h1>GJ Backpacks</h1>
        </div>
        <div class="col-md-6">
        <div class="botonesCabecera">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inicioSesion">Iniciar Sesion</button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Registrarme">Registrarte Ahora!</button>
        </div>
      </div>
    </div>
  </header>
  <div class="">
  </div>
  <div class="">
    <figure>
		<img src="img/Portada2.jpg">
	</figure>

  </div>
  <nav id="menu">
			<ul>
				<li>Tipos</li>
				<li>Marca</li>
			</ul>

	</nav>

  <div id="listado">
  <?php
//  print_r($avisos); die;
    foreach ($avisos as $key => $value) {
     ?>
      <div class="seccion" id="cuadro">
        <article>
          <figure>
            <img class="centrado" src="img/mochila_antirobo2.jpg" style="width:200px; height:200px;">
            <figcaption>
              <p><strong>Titulo:</strong><?php echo $value['titulo']; ?></p>
              <p><strong>Precio:</strong><?php echo $value['descripcion']; ?></p>
              <p><strong>Unidades</strong><?php echo $value['stock']; ?></p>
            </figcaption>
          </figure>
        </article>
      </div>
    <?php } ?>

	<aside id="columna">
		<blockquote>POR MARCA</blockquote>
		<blockquote>POR COLOR</blockquote>
		<blockquote>POR TIPO</blockquote>
		<blockquote>POR PRECIOS</blockquote>
	</aside>


  <footer id="pie">
    Derechos Reservados &copy; 2018-2019
  </footer>

    <?php require "ventanasModales.html";  ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/acciones.js"></script>

    </script>
  </body>
</html>
