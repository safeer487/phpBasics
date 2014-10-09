<?php 

$aaNotas = array(
		array(5, 6, 8),
		array(2, 8, 8),
		array(1, 7, 2)
	);

$fMediaPepe = ($aaNotas[0][0] + $aaNotas[0][1] + $aaNotas[0][2]) / 3;
echo $fMediaPepe;

//forma 2
for ($i=0; $i < count($aaNotas[0]); $i++) { 		
	$fMediaPepe += $aaNotas[0][$i];
}
$fMediaPepe /= count($aaNotas[0]);

echo $fMediaPepe;





 ?>