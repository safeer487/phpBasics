<?php  

$aPaises = array();
$aPaises[] = 'Chile';
$aPaises[] = 'Nigeria';
$aPaises[] = 'Ecuador';


?>

<form action="arraysMostrar.php" method="post">
	<!-- IMPORTANTE PONER COMILLAS SIMPLES -->
	<input type='hidden' name='paises' 
	value='<?php echo serialize($aPaises); ?>' />
	<input type="submit">
</form>