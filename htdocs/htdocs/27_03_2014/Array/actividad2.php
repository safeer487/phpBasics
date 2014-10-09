<?php 

//Declaro los arrays
$aNotaspepe = array(8 ,7, 9 );
$aNotasjuan = array(4, 9, 9);
$aNotasalicia = array();
$aNotasalicia[] = 5;
$aNotasalicia[] = 6;
$aNotasalicia[] = 7;
$fMediapepe = 0;
$fMediajuan = 0;
$fMediaalicia = 0;

//Calcula la media de pepe
for ($i=0; $i <count($aNotaspepe) ; $i++) { 
	$fMediapepe = $fMediapepe + $aNotaspepe[$i];
}
$fMediapepe /= count($aNotaspepe);
//$fmediapepe = $fMediapepe / count($aNotaspepe);



//Calcula la media de juan
for ($i=0; $i < count($aNotasjuan); $i++) { 
	$fMediajuan = $fMediajuan + $aNotasjuan[$i];
}
$fMediajuan /= count($aNotasjuan);



//Calcula la media de alicia
for ($i=0; $i < count($aNotasalicia); $i++) { 
	$fMediaalicia = $fMediaalicia + $aNotasalicia[$i];
}
$fMediaalicia /= count($aNotasalicia);


//Mostrar
echo "Pepe - " .implode(" ", $aNotaspepe) . ' ->' .$fMediapepe.  '<br/>';
echo "juan - " .implode(" ", $aNotasjuan) . ' ->' .$fMediajuan. '<br/>';
echo "alicia - " .implode(" ", $aNotasalicia). ' ->' .$fMediaalicia. '<br/>';




 ?>
