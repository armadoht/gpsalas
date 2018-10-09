<?php
	class RadiosController extends ControladorBase{
		public function RadiosController(){
			parent::ControladorBase();
		}
/**************************************************/
/*Todos los eventos posibles CRUD*/
/**************************************************/

		public function index(){
			$radios = new Radios();
			$allradios = $radios->getAll();
			$this->view("radios",array(
				"allRadios" => $allradios,
				"Hola" => "Mvc Modelo vista controlador"
			)); 
		}

		public function crear(){

			if(isset($_POST["usuario"])){
				
				$radios = new Radios();
				$radios->setUsuario($_POST["usuario"]);
				$radios->setPuesto($_POST["puesto"]);
				$radios->setDepartamento($_POST["departamento"]);
				$radios->setMarca($_POST["marca"]);
				$radios->setModelo($_POST["modelo"]);
				$radios->setNumeroSerie($_POST["numeroSerie"]);
				$radios->setTipoEquipo($_POST["tipoEquipo"]);
				$radios->setNumeroFactura($_POST["factura"]);
				$radios->setNumeroActivo($_POST["activo"]);
				//$radios->set($_POST[""]);

				//Guardamos los datos
				$save = $radios->save();
			}
			$this->redirect("Radios","index");
		}

		public function borrar(){
			if(isset($_GET["idRadios"])){
				$idRadios = (int)$_GET["idRadios"];

				$radios = new Radios();
				$radios->deleteById($idRadios);
			}
			$this->redirect();
		}

		public function hola(){
			$radios = new RadiosModel();
			$rad = $radios->getUnRadio();
			var_dump($rad);
		}
		
	}
?>