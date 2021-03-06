<?php
class LoginController extends ControladorBase{
	public function LoginController(){
		parent::ControladorBase();
	}//.\constructor
	

	public function login(){
		$this->view("login", array("Login" => ""));
	}

	public function salir(){
		session_start();
		session_destroy();
		$this->view("main",array("main" => "index"));
	}

/********CRUD*******/

	//Create -> Registro
	public function registroPropio(){
		session_start();
		if($_SESSION["user"]){
			$registro = new Registro();
			if($_POST["tema"] == '' || $_POST["tipoEquipo"] == '' || $_POST["horaInicio"] == '' || $_POST["horaFin"] == ''){
					$this->redirect("Login","readLoad");
				}else{
					$registro->setTema($_POST["tema"]);
					$registro->setIdCompanias($_POST["localidad"]);
					$registro->setIdSala($_POST["sala"]);
					$registro->setFecha($_POST["fecha"]);
					$registro->setHoraInicio($_POST["horaInicio"]);
					$registro->setHoraFin($_POST["horaFin"]);
					$registro->setSolicitante($_POST["tipoEquipo"]);
					if($registro->valRegistroSala() == 0){
						$registro->save();
					}
					
				}
		}
		$this->redirect("Login","readLoad");
	}

	//Delet -> Registo
	public function delet(){
		session_start();
		$login = new Login();
		$datos = $login->getByIdRegistro($_GET["valor"]);
		$this->view("delet", array(
				"datosRegistros" => $datos
			));
	}

	//Confirmacion Aceptada
	public function borrar(){
		session_start();
		$login = new Login();
		$valor = $_GET["valor"];
		$login->DeletRegistro($valor);
		$this->redirect("Login","readLoad");
	}

	public function readLoad(){
		session_start();
		$login = new Login();
		if($_SESSION["user"] == 'ahuerta'){
			$arrayUsuarios = $login->getAll();
			$this->viewAdmin("admin",array(
				"arrayUsuarios" => $arrayUsuarios
			));
		}else{
			$login->setUsuario($_SESSION["user"]);
			$salas = $login->getSalaLocalidad();
			$misRegistros = $login->getPropiosRegistros();
			$this->view("registro", array(
				"datosSalas"=> $salas,
				"datosRegistros" => $misRegistros
			));
		}
	}

	public function registro(){
		session_start();
		if($_SESSION["user"] == 'ahuerta'){
			$login = new Login();
			$login->setUsuario($_POST["usuario"]);
			$login->setEmail($_POST["email"]);
			$login->setPassword($_POST["password"]);
			$login->insertLogin();
		}
			$arrayUsuarios = $login->getAll();
			$this->viewAdmin("admin",array(
				"arrayUsuarios" => $arrayUsuarios
			));		
	}


	public function validar(){
		session_start();
		if($_POST["usuario"] && $_POST["password"]){

			$login = new Login();

			$login->setUsuario($_POST["usuario"]);
			$login->setPassword($_POST["password"]);
			$result = $login->validarLogin();

			if($result){
				$_SESSION["user"] = $_POST["usuario"];
				//Admin
				if($_POST["usuario"] == 'ahuerta'){
					$arrayUsuarios = $login->getAll();
					$this->viewAdmin("admin",array(
						"arrayUsuarios" => $arrayUsuarios
					));
				}else{
					$login->setUsuario($_SESSION["user"]);
					$salas = $login->getSalaLocalidad();
					$misRegistros = $login->getPropiosRegistros();
					$this->view("registro", array(
						"datosSalas"=> $salas,
						"datosRegistros" => $misRegistros
					));
				}
			}else{
				header("Location:index.php?controller=Login&action=login");
			}
		}else{
			header("Location:index.php?controller=Login&action=login");
		}
	}
}//.\end class
?>