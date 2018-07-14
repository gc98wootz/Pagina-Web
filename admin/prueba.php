<?php require "seguridad.php"; require "vistas.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Documento</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilos3.css">
  </head>
  <body>
    <header>
      <div class="container" id ="hd">
            <div class="col-md-6">
              <h1>GJ Backpacks : Anuncio</h1>

            <div class="col-md-6 text-right">
              <div class="dropdown" id="bot">
                <button class="btn btn-default dropdown-toggle" id="cuenta" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <?php echo $_SESSION["nombreUsuario"];?>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                  <li><a href="salir.php">cerrar sesion</a></li>
                </ul>
              </div>
            </div>
            </div>
        </div>
      </div>
    </header>
    <section class= "admin" id="fondo">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <button type="btnNuevoAviso" class= "btn btn-primary" data-toggle="modal" data-target="#nuevoAviso">Publicar</button>
        </div>
        <div class="row">
          <div class="">
            <aside id="columna">
          		<blockquote>Paso 1 : Ingresa la marca que deseas vender</blockquote>
          		<blockquote>Paso 2 : Escoge la cateogria adecuada para tu venta</blockquote>
          		<blockquote>Paso 3 : Seleciona una foto de tu producto</blockquote>
          		<blockquote>Paso 4 : Escriba el precio de venta</blockquote>
          	</aside>
          </div>
          <figure>
      		<img class="imgAviso" src="../img/aviso2.jpg">
      	</figure>
        </div>
      </div>
      </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="nuevoAviso">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id ="msnNuevoAviso">Publicar Aviso</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" id="formu-nuevoAviso">
              <div class="form-group">
                <label  class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Escriba la marca" name="titulo">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Categoria</label>
                <div class="col-sm-10">
                    <?php crearCategorias(); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Imagen</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputPassword3" name="imagen">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Stock</label>
                <div class="col-sm-10">
                  <input name="stock" class="form-control" type="text" ></input>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Precio</label>
                <div class="col-sm-10">
                  <input name="precio" class="form-control" type="text" ></input>
                </div>
              </div>

                <input type="hidden" name="tipoOperacion" value="insertarAviso">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["idUser"]?>">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <footer id="pie">
      Derechos Reservados &copy; 2018-2019
    </footer>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/acciones.js"></script>
  </body>
</html>
