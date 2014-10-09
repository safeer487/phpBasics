<?php 
echo "Cuantos hermanos tienes?.<br/>";
$iNumHermanos = '3';
switch ($iNumHermanos) {
	case '1':
		echo "Tiene uno hermano";
		break;
	case '2';
		echo "Tiene dos hermanos";
		break;
	case '3';
		echo "Tiene tres hermanos";
		break;
	
	default:
		echo 'Tiene ' .$iNumHermanos . ' hermanos';
		break;
}
echo "<br/>";

/*loteria*/

$iNumBoleto = '1575';
switch ($iNumBoleto) {
	case 1575:
		echo "Eres rico";
		break;
	
	default:
		echo "Mala suerte";
		break;
}




 ?>