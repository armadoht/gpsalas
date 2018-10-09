<?php
	function cargarControlador($controller){
		$controlador = ucwords($controller).'Controller';
		$strFileController = "controller/".$controlador."php";
		
		if(!is_file($strFileController)){
			$strFileController="controller/".ucwords(CONTROLADOR_DEFECTO)."Controller.php";
		}
		require_once $strFileController;
		$controllerObj = new $controlador();
		return $controllerObj;
	}

	function cargarAction($controllerObj,$action){
		$accion = $action;
		$controllerObj->$accion();
	}

	function lanzarAccion($controllerObj){
		if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
			cargarAction($controllerObj,$_GET["action"]);
		}else{
			cargarAction($controllerObj,ACCION_DEFECTO);
		}
	}

	function cargarControladorLogin(){
		require_once('controller/LoginController.php');
		$controllerObj = new LoginController();
		return $controllerObj;
	}

	function cargarControladorSala(){
		require_once('controller/SalaController.php');
		$controllerObj = new SalaController();
		return $controllerObj;
	}

?>