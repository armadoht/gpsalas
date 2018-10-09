<?php
	class RadiosModel extends ModeloBase{
		private $table;

		public function RadiosModel(){
			$this->table = "radios";
			parent::ModeloBase($this->table);
		}

		public function getUnUsuario(){
			$query = "SELECT * FROM radios WHERE noSerie=''";
			$radio = $this->ejecutarSql($query);
			return $radio;
		}
	}

?>