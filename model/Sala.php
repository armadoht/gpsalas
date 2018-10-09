<?php
class Sala extends EntidadBase{
	
	private $idSalas;
	private $nombreSala;
	private $idCompanias;

	public function Sala(){
		$table = "salas";
		parent::EntidadBase($table);
	}

	/***********GETTER AND SETTER************/

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

	public function arrayInerJoin(){
		$query = "SELECT salas.idSalas, salas.nombreSala, companias.nombre FROM companias INNER JOIN salas ON salas.idCompanias = companias.idCompanias";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_object()) {
				$resultSet[] = $row;
			}		
		}
		return $resultSet;
	}


}



?>