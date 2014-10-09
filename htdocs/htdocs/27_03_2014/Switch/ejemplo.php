<?php 
/*
s -> String (palabra)
i -> Int (entero)
f -> float (número con decimales)
b -> Boolean (true o false)
a -> Array (ya lo veéis)
aa-> Matriz (también lo veréis)
 */

$iNum1 = 5;
$iNum2 = 8;
$sOperacion = '/';

switch ($sOperacion) {
	case '+':
		echo $iNum1 + $iNum2;
		break;
	case '-':
		echo $iNum1 - $iNum2;
		break;
	case '*':
		echo $iNum1 * $iNum2;
		break;
	case '/':
		echo $iNum1 / $iNum2;
		break;
	default:
		echo "No ha echo ningun operacion mathematica";
}




 ?>