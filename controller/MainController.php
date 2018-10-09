<?php
	class MainController extends ControladorBase{
		public function MainController(){
			parent::ControladorBase();
		}
		public function index(){
			#Cargar mainView.php
			$registro = new Registro();
			$allRegistros = $registro->getRegistro();
			$this->view("main",  array("datosArray" => $allRegistros));
		}

	}
?>