<?php
class SalaController extends ControladorBase{
	public function SalaController(){
		parent::ControladorBase();
	}//.\constructor

	public function index(){
		#Carga el formulario de login
		session_start();
		$salas = new Sala();
		$arraySalas = $salas->arrayInerJoin(); 
		$this->view("sala", array(
			"arraySalas" => $arraySalas,
		));
	}

	public function salir(){
		session_start();
		session_destroy();
		$this->view("main",array("main" => "index"));
	}

	public function registro(){
			$salas = new Sala();
			$salas->setNombreSala($_POST["salaNombre"]);
			$salas->setIdCompanias($_POST["localidad"]);
			$salas->save();
			$this->redirect("sala","index");
	}


}//.\end class
?>