<?php 
	if(isset($_GET['error'])){
		switch ($_GET['error']) {
			case 1:
				echo "Hay que poner numbers no alphabets";
				break;
			
			case 2:
				echo "Los campos no pueden estar vacios";
				break;
		}

	}


 ?>


<form action="sumar.php" method="post">
	<input type="text" name="first"> + <input type="text" name="second"> = <input type="submit" value="Calcular">
	<input type="text"  value="<?php if(isset($_GET['resultado'])){echo $_GET['resultado'];}?>"> 
		<br>
	
</form>