<?php
class Login extends EntidadBase{
	private $idAcceso;
	private $usuario;
	private $emanil;
	private $password;
	private $fechaRegistro;
	private $estado;

	public function Login(){
		$table = "acceso";
		parent::EntidadBase($table);
	}
	/***********GETTER AND SETTER************/

	public function getIdAcceso(){
		return $this->idAcceso;
	}
	public function setIdAcceso($idAcceso){
		$this->idAcceso = $idAcceso;
	}

	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}

	public function getFechaRegistro(){
		return $this->password;
	}
	public function setFechaRegistro($fechaRegistro){
		$this->fechaRegistro = $fechaRegistro;
	}

	public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function validarLogin(){
		$query = "SELECT * FROM acceso WHERE (usuario='$this->usuario' and password='$this->password') and estado = 1";
		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}

	public function insertLogin(){
		$hoy = date('Y-m-d');
		$query = "INSERT INTO `acceso` (`idAcceso`, `usuario`, `email`, `password`, `fechaRegistro`, `estado`) VALUES (NULL, '$this->usuario', '$this->email', '$this->password', '$hoy', '1')";
		$save = $this->db()->query($query);
		return $save;
	}

	public function getLocalidades(){
		$query = "SELECT * FROM `companias`";
		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			while ($row = $result->fetch_array()) {
				$resultSet[] = $row;
			}
			return $resultSet;
		}else{
			return false;
		}
	}

	public function getSalaLocalidad(){
		$query = "SELECT salas.idSalas,salas.nombreSala,companias.idCompanias,companias.nombre FROM `acceso` 
		INNER JOIN accesosalas ON acceso.idAcceso = accesosalas.idAcceso
		INNER JOIN salas ON accesosalas.idSala = salas.idSalas
		INNER JOIN companias ON salas.idCompanias = companias.idCompanias
		WHERE acceso.usuario = '$this->usuario'";

		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			while ($row = $result->fetch_array()) {
				$resultSet[] = $row;
			}
			return $resultSet;
		}

	}

	public function getPropiosRegistros(){
		//Obtener los registros del propietario
		$query = "SELECT registro.idRegistro,registro.tema, companias.nombre, salas.nombreSala, registro.fecha,registro.horaInicio,registro.horaFin,registro.solicitante,registro.estatus FROM acceso INNER JOIN accesosalas ON acceso.idAcceso = accesosalas.idAcceso INNER JOIN registro ON accesosalas.idSala = registro.idSala INNER JOIN companias ON registro.idCompanias = companias.idCompanias INNER JOIN salas on registro.idSala = salas.idSalas WHERE acceso.usuario = '$this->usuario' and registro.estatus = 1";
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

	public function getByIdRegistro($valor){
		//Obtener los registros del propietario
		$query = "SELECT registro.idRegistro,registro.tema, companias.nombre, salas.nombreSala, registro.fecha,registro.horaInicio,registro.horaFin,registro.solicitante,registro.estatus FROM acceso INNER JOIN accesosalas ON acceso.idAcceso = accesosalas.idAcceso INNER JOIN registro ON accesosalas.idSala = registro.idSala INNER JOIN companias ON registro.idCompanias = companias.idCompanias INNER JOIN salas on registro.idSala = salas.idSalas WHERE registro.idRegistro = $valor and registro.estatus = 1";
		$datos = $this->db()->query($query);
		if($datos->num_rows > 0){
			while ($row = $datos->fetch_array()) {
				$resultSet[] = $row;
			}		
			return $resultSet;
		}
	}

	public function DeletRegistro($valor){
		$query = "UPDATE `registro` SET `estatus` = '0' WHERE `registro`.`idRegistro` = $valor";
		$datos = $this->db()->query($query);
		return  $datos;
	}

}
?>