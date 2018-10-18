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

	public function registroPermiso(){
		$salas = new Sala();
		$salas->setIdSalas($_POST["sala"]);
		$salas->setIdAcceso($_POST["usuario"]);
		if($_POST["sala"] != ''|| $_POST["usuario"] =! '' ){
			$salas->savePermisos();
		}
		$this->redirect("sala","asignar");
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

	public function asignar(){
		session_start();
		$salas = new Sala();
		$arrayResponsables = $salas->arraySalaRespo();
		$usuarios = $salas->usuariosSistema();
		$arraySalas = $salas->salasSistemas();

		$this->view("salaResponsable", array(
			"arrayDatos" => $arrayResponsables,
			"usuarios" => $usuarios,
			"salas" => $arraySalas
		));
	}

	
}//.\end class
?>