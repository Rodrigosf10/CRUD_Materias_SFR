<?php  
	require_once "../clases/Conexion.php";
	require_once "../clases/Metodos.php";

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$semestre = $_POST['semestre'];
	$creditos = $_POST['creditos'];
	$carrera = $_POST['carrera'];
	$datos = array($nombre,$semestre,$creditos,$carrera,$id);
	$objeto = new Metodos();

	if($objeto->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al actualizar";
	}
?>