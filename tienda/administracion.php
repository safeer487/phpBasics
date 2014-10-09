<?php 

//Cierra la sesión
if(isset($_GET['cerrar'])) {
  session_start();
  session_destroy();
}

//Comprueba que se ha dado de alta
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
      <h2>Artículos</h2>
      <?php 

      if(isset($_GET['nuevo'])) {
        echo '<div class="alert alert-success">Nuevo artículo añadido.</div>';
      }

      if(isset($_GET['modificar'])) {
        echo '<div class="alert alert-success">Artículo modificado con éxito.</div>';
      }


      ?>
       <div class="btn-group">
        <a href="crearArticulo.php"><button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span>
        Nuevo</button></a>   

        <a href="elegirModificar.php"><button type="button" class="btn btn-primary">
          <span class="glyphicon glyphicon-pencil"></span>
          Modificar
        </button></a>     

        

        <a href="eliminar.php"><button type="button" class="btn btn-danger">
        <span class="glyphicon glyphicon-trash"></span>
        Eliminar</button></a>

        <a href="ver.php"><button type="button" class="btn btn-warning">
        <span class="glyphicon glyphicon-eye-open"></span>
        Ver</button></a>

        <a href="buscador.php"><button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-search"></span>
          Buscar
        </button></a>
      </div>
      <div class="row">

        <a href="administracion.php?cerrar=1">
          <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Cerrar</button>
        </a>
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
