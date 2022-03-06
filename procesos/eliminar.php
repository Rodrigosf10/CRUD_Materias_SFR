<?php 
	require_once "../clases/Conexion.php";
	require_once "../clases/Metodos.php";

	$id = $_GET['id'];
	$objeto = new Metodos();
	
	if($objeto->eliminarDatosNombre($id)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al eliminar";
	}
?>