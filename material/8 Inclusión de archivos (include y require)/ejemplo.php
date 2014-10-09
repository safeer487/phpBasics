<?php
/**
 *  include y require importan o insertan el código 
 *  contenido de un archivo dentro de otro.
 */

/** Obliga a insertar un código. En el caso de no 
encontrarse, devuelve un error y aborta la ejecución. **/
require("ruta/archivo.php");

/** Intenta insertar un código. En el caso de no 
encontrarse, devuelve un warning y continúa la ejecución. **/
include("ruta/archivo.php");

/** El sufijo "once" se aseguran que se llama al 
archivo una sola vez. **/
require_once("ruta/archivo.php");
include_once("ruta/archivo.php");


?>