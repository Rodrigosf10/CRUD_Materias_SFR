<?php
	require_once "../clases/Conexion.php";
	require_once "../clases/Metodos.php";

	$nombre = $_POST['nombre'];
	$semestre = $_POST['semestre'];
	$creditos = $_POST['creditos'];
	$carrera = $_POST['carrera'];
	$datos = array($nombre,$semestre,$creditos,$carrera);
	$objeto = new Metodos();
	
	if($objeto->insertarDatosNombres($datos)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al agregar";
	}
?>