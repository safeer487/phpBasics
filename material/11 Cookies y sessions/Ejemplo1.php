<?php

/**
 * Las cookies son una forma para guardar información en el equipo
 *  del clinte
 */

//Crea una cookie

setcookie('nombre', 'valor', 'tiempo para expirar');

/** El tiempo en el que expira la cookie. Es una fecha Unix por tanto está en número de segundos a partir de la presente época. En otras palabras, probablemente utilizará la función time() más el número de segundos que quiere que dure la cookie. También podría utilizar la función mktime(). time()+60*60*24*30 configurará la cookie para expirar en 30 días. Si se pone 0, o se omite, la cookie expirará al final de la sesión (al cerrarse el navegador). **/

$iTiem = time() + (311040000);
setcookie('idioma', 'es', $iTiem);

//Leer cookie

$_COOKIE['nombre']

echo 'Tiene una Cookie de idioma: ' . $_COOKIE['idioma'];

/**
 * Las sessions, a diferencia de las cookies, no se almacenan. Existen mientras el cliente esté conectado al servidor. En cuanto cierre el navegador, o el servidor web reinicie, desaparecerá toda información. 
 */

//Crear session
session_start();
$_SESSION['nombre'] = 'valor';

//Leer session
session_start();
$_SESSION['nombre'];

//Borrar una session
unset($_SESSION['nombre']);

//Destruir todas las sessions
session_start();
session_destroy();

//Ejemplo para permitir el acceso a un usuario
session_start();
if(!isset($_SESSION['acceso'])) {
	Header('Location: identificacion.php');
}

?>