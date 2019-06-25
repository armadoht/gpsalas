<?php
class Sala extends EntidadBase{
	
	private $idSalas;
	private $nombreSala;
	private $idCompanias;

	private $idAcceso;

	public function Sala(){
		$table = "salas";
		parent::EntidadBase($table);
	}

	/***********GETTER AND SETTER************/
	public function setIdAcceso($idAcceso){
		$this->idAcceso = $idAcceso;
	}

	public function getIdAcceso(){
		return $this->idAcceso;
	}

	public function getIdSalas(){
		return $this->idSalas;
	}
	public function setIdSalas($idSalas){
		$this->idSalas = $idSalas;
	}

	public function getNombreSala(){
		return $this->nombreSala;
	}
	public function setNombreSala($nombreSala){
		$this->nombreSala = $nombreSala;
	}

	public function getIdCompanias(){
		return $this->idCompanias;
	}
	public function setIdCompanias($idCompanias){
		$this->idCompanias = $idCompanias;
	}

	public function save(){
		$query = "INSERT INTO `salas` (`idSalas`, `nombreSala`, `idCompanias`) VALUES (NULL, '$this->nombreSala', '$this->idCompanias')";
		return $save = $this->db()->query($query);
	}

	public function savePermisos(){
		$query="INSERT INTO `accesosalas` (`idAccesoSala`, `idSala`, `idAcceso`, `Estarus`) VALUES (NULL, '$this->idSalas', '$this->idAcceso', '1');";
		return $save = $this->db()->query($query);
	}

	public function arrayInerJoin(){
		$query = "SELECT salas.idSalas, salas.nombreSala, companias.nombre FROM companias INNER JOIN salas ON salas.idCompanias = companias.idCompanias";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_object()) {
				$resultSet[] = $row;
			}
			return $resultSet;		
		}else{
			return false;
		}
		
	}

	public function arraySalaRespo(){
		$query = "SELECT acceso.idAcceso,acceso.usuario,salas.idSalas,salas.nombreSala FROM `accesosalas` INNER JOIN acceso ON acceso.idAcceso = accesosalas.idAcceso
		INNER JOIN salas on salas.idSalas = accesosalas.idSala";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}
			return $resultSet;
		}else{
			return false;
		}
		
	}

	public function usuariosSistema(){
		$query = "SELECT idAcceso, usuario FROM `acceso`";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}		
		}
		return $resultSet;
	}

	public function salasSistemas(){
		$query = "SELECT salas.idSalas,salas.nombreSala,companias.nombreCorto FROM salas INNER JOIN companias on salas.idCompanias = companias.idCompanias";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}		
		}
		return $resultSet;
	}

	


}
?>