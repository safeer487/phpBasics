<?php

$n = 13.2635;

$n1 = sprintf("%.3f",$n);

echo $n1;
echo "<br />";

$n2 = round($n,3);

echo $n2;
echo "<br />";

$n3 = sprintf("%05d",$n);

echo $n3;
echo "<br />";


/*
Para el formato de salida en pantalla definitivo
usaremos number_format($numero,decimales,separador-decimales,separador-millares)
*/

$numero = 12345.3456;

$numero_formateado = number_format($numero,3,",",".");

echo $numero_formateado;

?>