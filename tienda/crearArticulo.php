<?php 

require_once 'seguridad.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <h1>Administración</h1>
      <h2>Crear artículo nuevo</h2>
      <div class="row">
        <?php 
        if(isset($_GET['error'])) {
          echo '<div class="alert alert-danger">
          <ul>';
          //Convertimos el serialize en array
          $aErrores = unserialize($_GET['error']);
          //Recorremos el array
          foreach ($aErrores as $key => $value) {
            switch ($value) {
              case '1':
                echo '<li>El <strong>nombre</strong> no puede estar vacío.</li>';
                break;
              case '2':
                echo '<li>El <strong>nombre</strong> es demasiado largo. Debe ser inferior a 200 carácteres.</li>';
                break;
              case '3':
                echo '<li>El <strong>color</strong> no puede estar vacío.</li>';
                break;
              case '4':
                echo '<li>El <strong>color</strong> es demasiado largo. Debe ser inferior a 7 carácteres (hexadecimal).</li>';
                break;
              case '5':
                echo '<li>La <strong>talla</strong> no puede estar vacía.</li>';
                break;
              case '6':
                echo '<li>La <strong>talla</strong> no es un número.</li>';
                break;
            }
          }
          echo '</ul>
          </div>';
        }
        ?>
      </div>
      <div class="row">
        <form role="form" action="procesarNueArticulo.php" method="post">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="El nombre">
          </div>
          <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" class="form-control">
              <?php 

              /* Conexion */
              $conexion = mysql_connect('localhost', 'root', '');
              mysql_select_db('tienda', $conexion);

              /* Consulta */
              $sSQL = "SELECT id, nombre FROM tipo_articulos";
              $resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

              /* Obtener datos */
              while($row = mysql_fetch_assoc($resultados)) {
                $iId = $row['id'];
                $sNom = $row['nombre'];
                echo "<option value='$iId'>$sNom</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="color" class="form-control" name="color" placeholder="El color">
          </div>
          <div class="form-group">
            <label for="talla">Talla</label>
            <input type="number" class="form-control" name="talla" id="talla" placeholder="La talla">
          </div>
          <div class="form-group">
            <label for="genero">Género</label>
            <select name="genero" id="genero" class="form-control">
               <?php 

              /* Consulta */
              $sSQL = "SELECT id, nombre FROM generos";
              $resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

              /* Obtener datos */
              while($row = mysql_fetch_assoc($resultados)) {
                $iId = $row['id'];
                $sNom = $row['nombre'];
                echo "<option value='$iId'>$sNom</option>";
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Crear</button>
        </form>
      </div>
      <div class="row">
        <a href="administracion.php">
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Volver</button>
      </div>
      </a>
    </div>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
