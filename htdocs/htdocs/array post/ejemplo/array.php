<?php 
	$sAlumnos = array();
	$sAlumnos[] = 'Rafa';
	$sAlumnos[] = 'Dani';
	$sAlumnos[] = 'Marc';
	$sAlumnos[] = 'Lucas';
	$sAlumnos[] = 'Lorena';
	$sAlumnos[] = 'Safeer';


 ?>
 
 	<form action="arrayMostrar.php" method="post">
 		<input type="text" name="hola">
 		<input type="hidden" name="alumnos" value='<?php echo serialize($sAlumnos); ?>'/>
 		<input type="submit" value="Ver alumnos">
 	</form>
 	

 	
 