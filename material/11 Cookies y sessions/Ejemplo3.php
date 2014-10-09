<?php
session_start();

$idusuario = 4;
$dias = array("L","M","X","J","V","S","D");
$andorra = "andorra";

$_SESSION["nombre"] = "Jose Antonio";
$_SESSION["idusuario"] = $idusuario;
$_SESSION["dias"] = $dias;
$_SESSION["andorra"] = $andorra;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>