<?php
class Registro extends EntidadBase{
	private $idRegistro;
	private $tema;
	private $idCompanias;
	private $idSala;
	private $fecha;
	private $horaInicio;
	private $horaFin;
	private $solicitante;
	private $estatus;

	public function Registro(){
		$table = "registro";
		parent::EntidadBase($table);
	}

	/***********GETTER AND SETTER************/
	public function getIdRegistro(){
		return $this->idRegistro;
	}
	public function setIdRegistro($idRegistro){
		$this->idRegistro = $idRegistro;
	}

	public function getTema(){
		return $this->idRegistro;
	}
	public function setTema($tema){
		$this->tema = $tema;
	}

	public function getIdCompanias(){
		return $this->idCompanias;
	}
	public function setIdCompanias($idCompanias){
		$this->idCompanias = $idCompanias;
	}

	public function getIdSala(){
		return $this->idSala;
	}
	public function setIdSala($idSala){
		$this->idSala = $idSala;
	}

	public function getFecha(){
		return $this->fecha;
	}
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getHoraInicio(){
		return $this->horaInicio;
	}
	public function setHoraInicio($horaInicio){
		$this->horaInicio = $horaInicio;
	}

	public function getHoraFin(){
		return $this->horaFin;
	}
	public function setHoraFin($horaFin){
		$this->horaFin = $horaFin;
	}

	public function getSolicitante(){
		return $this->solicitante;
	}
	public function setSolicitante($solicitante){
		$this->solicitante = $solicitante;
	}

	public function getEstatus(){
		return $this->estatus;
	}
	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

	public function save(){
		//$hoy = date('Y-m-d');
		$query = "INSERT INTO `registro` (`idRegistro`, `tema`, `idCompanias`, `idSala`, `fecha`, `horaInicio`, `horaFin`, `solicitante`, `estatus`) VALUES (NULL, '$this->tema', '$this->idCompanias', '$this->idSala', '$this->fecha', '$this->horaInicio', '$this->horaFin', '$this->solicitante', '1')";
		$save = $this->db()->query($query);
		return $save;
	}

	public function getRegistro(){
		$query = "SELECT registro.idRegistro,registro.tema, companias.nombre, salas.nombreSala, registro.fecha,registro.horaInicio,registro.horaFin,registro.solicitante,registro.estatus FROM registro  INNER JOIN companias  ON registro.idCompanias = companias.idCompanias INNER JOIN salas  ON registro.idSala = salas.idSalas WHERE registro.estatus = 1";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}		
			return $resultSet;
		}
	}

	public function valRegistroSala(){
		$query = "SELECT * FROM `registro` WHERE (`fecha`='$this->fecha' && `idSala`='$this->idSala') && (`horaInicio`<='$this->horaInicio' && `horaFin` >= '$this->horaFin')";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){		
			return 1;
		}else{
			return 0;
		}

	}

	public function registroById(){
		$query = "SELECT * FROM registro WHERE idRegistro = $this->idRegistro";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}		
			return $resultSet;
		}
	}

	

}

?>