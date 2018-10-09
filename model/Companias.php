<?php
class Companias extends EntidadBase{

	private $idCompanias;
	private $nombre;
	private $descripcionCompania;
	private $ubicacion;
	private $nombreCorto;
	private $estatus;

	public function Companias(){
		$table = "companias";
		parent::EntidadBase($table);
	}

	/***********GETTER AND SETTER************/

	public function getIdCompanias(){
		return $this->idCompanias;
	}
	public function setIdCompanias($idCompanias){
		$this->idCompanias = $idCompanias;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDescripcionCompania(){
		return $this->descripcionCompania;
	}
	public function setDescripcionCompania($descripcionCompania){
		$this->descripcionCompania = $descripcionCompania;
	}

	public function getUbicacion(){
		return $this->ubicacion;
	}
	public function setUbicacion($ubicacion){
		$this->ubicacion = $ubicacion;
	}

	public function getNombreCorto(){
		return $this->nombreCorto;
	}
	public function setNombreCorto($nombreCorto){
		$this->nombreCorto = $nombreCorto;
	}

	public function getEstatus(){
		return $this->estatus;
	}
	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

	public function getArrayCompanias(){
		$query = "SELECT * FROM `companias`";
		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			while ($row = $query->fetch_object()) {
					$resultSet[] = $row;
			}
			return $resultSet;
		}
		return false;
	}



}

?>