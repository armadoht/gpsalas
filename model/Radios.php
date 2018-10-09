<?php
	class Radios extends EntidadBase{
		private $idRadio; //1
		private $usuario; //2
		private $puesto; //3
		private $departamento; //4
		private $marca; //5
		private $modelo; //6
		private $numeroSerie; //7
		private $tipoEquipo; //8
		private $numeroFactura; //9
		private $numeroActivo; //10

		public function Radios(){
			$table = "radios";
			parent::EntidadBase($table);
		}
		/*******GETTER AND SETTER ********/
		public function getIdRadio(){
			return $this->idRadio;
		}
		public function setIdRadio($idRadio){
			$this->idRadio = $idRadio;
		}

		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getPuesto(){
			return $this->puesto;
		}
		public function setPuesto($puesto){
			$this->puesto = $puesto;
		}

		public function getDepartamento(){
			return $this->departamento;
		}
		public function setDepartamento($departamento){
			$this->departamento= $departamento;
		}

		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca= $marca;
		}

		public function getModelo(){
			return $this->marca;
		}
		public function setModelo($modelo){
			$this->modelo= $modelo;
		}

		public function getNumeroSerie(){
			return $this->numeroSerie;
		}
		public function setNumeroSerie($numeroSerie){
			$this->numeroSerie= $numeroSerie;
		}

		public function getTipoEquipo(){
			return $this->tipoEquipo;
		}
		public function setTipoEquipo($tipoEquipo){
			$this->tipoEquipo= $tipoEquipo;
		}

		public function getNumeroFactura(){
			return $this->numeroFactura;
		}
		public function setNumeroFactura($numeroFactura){
			$this->numeroFactura= $numeroFactura;
		}

		public function getNumeroActivo(){
			return $this->numeroActivo;
		}
		public function setNumeroActivo($numeroActivo){
			$this->numeroActivo= $numeroActivo;
		}

		public function save(){
			$hoy = date('Y-m-d');
			$query = "INSERT INTO `radios` (`idRadio`, `usuario`, `puesto`, `departamento`, `marca`, `modelo`, `numeroSerie`, `tipoEquipo`, `numeroFactura`, `numeroActivo`, `fechaAlta`, `fechaBaja`, `estatus`) VALUES (NULL, '$this->usuario', '$this->puesto', '$this->departamento', '$this->marca', '$this->modelo', '$this->numeroSerie', '$this->tipoEquipo', '$this->numeroFactura', '$this->numeroActivo', '$hoy', 'NULL', '1');";
			$save = $this->db()->query($query);
			return $save;
		}

	}

?>