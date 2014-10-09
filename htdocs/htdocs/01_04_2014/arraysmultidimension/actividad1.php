<?php 

$aaEnano = array();
$aaEnano[0][0] = 'Enano';
$aaEnano[0][1] = 'Enano';
$aaEnano[0][2] = 'Enano';

$aaEnano[1][0] = 'Enano';
$aaEnano[1][1] = 'Enano';
$aaEnano[1][2] = 'Enano';

$aaEnano[3][0] = 'Enano';
$aaEnano[3][1] = 'Enano';
$aaEnano[3][2] = 'Enano';

/*foreach ($aaEnano as  $value) {
	echo $value[1] . ' ';
}
*/

//segunda parte
$aaGrande = array();
for ($i=0; $i < 40; $i++) { 
	for ($j=0; $j < 40; $j++) { 
		$aaGrande[$i][$j] = "Grande";
	}
}
echo "<pre>";
print_r($aaGrande);
echo "</pre>";

 ?>