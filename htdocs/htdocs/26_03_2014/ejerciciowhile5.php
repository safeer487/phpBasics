<?php 
//while numero redondeados
/*$i = 1;
while ( $i <= 100) {
	if (($i % 10) == 0) {
		echo "<b>$i</b> <br/>";
	}else{
		echo "$i <br/>";
	}
	$i = $i + 1;
}
*/
$inumIni = 1;
$inumFin = 100;
while ($inumIni <= $inumFin) {
	if (($inumIni % 10) == 0) {
		echo "<b>$inumIni</b> <br/>";
	}else{
	  	echo "$inumIni <br/>";

	}
	$inumIni++;
}





 ?>