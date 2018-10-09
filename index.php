<?php
	require_once("config/global.php");
	require_once("core/ControladorBase.php");
	require_once("core/ControladorFrontal.func.php");

	//Controlador General

	if(isset($_GET["controller"]) && $_GET["controller"]=="Login"){
		$controllerObj = cargarControladorLogin();
	}elseif(isset($_GET["controller"]) && $_GET["controller"]=="sala"){
		$controllerObj = cargarControladorSala();
	}else{
		$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
	}
	lanzarAccion($controllerObj);
?>