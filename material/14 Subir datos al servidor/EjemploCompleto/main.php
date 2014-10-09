<?php 

include "lib/BD.php";

/* Clase main de la web */
class main {

	private $miDB;
	
	/* Constructor */
	function main() {
		$this->miDB = new BD();
		$this->procesarFormulario();
	}

	/**
	 * Metodo que introduce los datos del formulario en la base de datos
	 */
	private function procesarFormulario() {
		if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["edad"])) {
			
			$this->miDB->insertar("INSERT INTO usuarios (nombre, correo, edad) VALUES ('".$_POST["nombre"]."', '".$_POST["correo"]."', '".$_POST["edad"]."');");
			$aResult = $this->miDB->consultar("SELECT * FROM usuarios;");
			$iUltimId = $aResult[count($aResult) - 1][0];
			$this->subirArchivo($iUltimId);
			$pagina = "index.html?exito=1";
			Header("Location: $pagina");
		} else {
			$pagina = "index.html?error=1";
			Header("Location: $pagina");
		}
	}
	
	/**
 	 * Metodo que sube un archivo al servidor
	 * @param; Nombre que tendrá el archivo cuando se renombre
	 */
	private function subirArchivo($iniId) {
		if(isset($_FILES["archivos"]) && $_FILES["archivos"]["size"] > 0) {
			$posiblesExt = explode(".", $_FILES["archivos"]["name"]);
			$num = count($posiblesExt) - 1;
			$extension = $posiblesExt[$num];
			$nomImg = "archivos/".$iniId.".".$extension;
			move_uploaded_file($_FILES["archivos"]["tmp_name"], $nomImg);
		}
	}
}

$main = new main();

?>
