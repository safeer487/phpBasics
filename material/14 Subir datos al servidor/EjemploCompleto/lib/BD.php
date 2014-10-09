<?php 

/* Clase que gestiona la base de datos */
class BD {

	//Atributos
	private $sNomBD;

	/**
	 * Constructor
	 */
	function BD() {
		$this->sNomBD = "concursantes.sqlite";
	}
	
	/**
	 * Metodo que se conecta con la base de datos
	 */
	private function conectar() {
		try  {
			return new PDO("sqlite:".$this->sNomBD);
		} catch(PDOException $e) {
			echo $e->getMessage();
			echo "<br><br>Base de datos -- NO -- cargada.";
		}
	}

	/**
	 * Metodo que consulta con la base de datos y devuelve unos resultados
	 * $aResult; array con los resultados
	 */
	public function consultar($insConsulta) {
		$aResult = Array();
		$db = new PDO("sqlite:".$this->sNomBD);
		$result = $db->query($insConsulta);
		if($result) {
			$i = 0;
			foreach ($result as $valor) {
				$aResult[$i] = $valor;
				$i++;
			}
			return $aResult;
		} else {
			echo "Error en la consulta: ".$insConsulta."<br>".$result;
		}
		$db = NULL;
	}

	/**
	 * Metodo que inserta en la base de datos, pero no devuelve nada
	 */
	public function insertar($insConsulta) {
		$db = $this->conectar();
		$db->exec($insConsulta);
		$db = NULL;
	}
}

?>
