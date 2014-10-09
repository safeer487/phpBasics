<?php 
//Comprueba que se ha dado de alta
require_once 'seguridad.php';

/**
 * Método que imprime el texto del género
 * a partir de su id
 * @param  Int $iniGen Id
 */
function mostrarNomGenero($iniGen) {
  /* Conexion */
  $conexion = mysql_connect('localhost', 'root', '');
  mysql_select_db('tienda', $conexion);

  /* Consulta */
  $sSQL = "SELECT nombre FROM generos WHERE id = $iniGen";
  $resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

  /* Obtener datos */
  while($row = mysql_fetch_assoc($resultados)) {
    return $row['nombre'];
  }
}

/**
 * Método que imprime el texto del tipo
 * a partir de su id
 * @param  Int $iniTip Id
 */
function mostrarNomTipo($iniTip) {
  /* Conexion */
  $conexion = mysql_connect('localhost', 'root', '');
  mysql_select_db('tienda', $conexion);

  /* Consulta */
  $sSQL = "SELECT nombre FROM tipo_articulos WHERE id = $iniTip";
  $resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

  /* Obtener datos */
  while($row = mysql_fetch_assoc($resultados)) {
    return $row['nombre'];
  }
}

/**
 * Método que devuelve el código HTML
 * @param  [type] $insColor [description]
 * @return [type]           [description]
 */
function mostrarColor($insColor) {
  return '<div id="color" style="background-color: #' . $insColor .'"></div>';
}

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
      <h2>Ver</h2>
       
       <div class="row">
          <table class="table">
            <tr>
              <th scope="cols">Nombre</th>
              <th scope="cols">Tipo</th>
              <th scope="cols">Color</th>
              <th scope="cols">Talla</th>
              <th scope="cols">Género</th>
            </tr>

            <?php 

            /* Conexion */
            $conexion = mysql_connect('localhost', 'root', '');
            mysql_select_db('tienda', $conexion);

            /* Consulta */
            $sSQL = "SELECT nombre, id_tipo_articulo, color, talla, id_genero FROM articulos;";
            $resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

            /* Obtener datos */
            while($row = mysql_fetch_assoc($resultados)) {
              $sNom = $row['nombre'];
              $iTipo = mostrarNomTipo($row['id_tipo_articulo']);
              $sColor = mostrarColor($row['color']);
              $iTalla = $row['talla'];
              $iGen = mostrarNomGenero($row['id_genero']);
              echo "<tr>
                      <td>$sNom</td>
                      <td>$iTipo</td>
                      <td>$sColor</td>
                      <td>$iTalla</td>
                      <td>$iGen</td>
                    </tr>";
            }
            ?>
            
          </table>
       </div>
       <div class="row">
        <a href="administracion.php">
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Volver</button>
      </div>
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
