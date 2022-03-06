<?php
	class Metodos{
		public function mostrarDatos($sql){
			$c = new Conectar();
			$conexion = $c->conexion();
			$result = mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
		public function insertarDatosNombres($datos){
			$c = new Conectar();
			$conexion = $c->conexion();
			$sql="INSERT INTO materias (nombre,semestre,creditos,carrera) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')"; 
			return $result = mysqli_query($conexion,$sql);
		}
		public function actualizaDatosNombre($datos){
			$c = new Conectar();
			$conexion = $c->conexion();
			$sql="UPDATE materias SET nombre='$datos[0]', semestre='$datos[1]', creditos='$datos[2]', carrera='$datos[3]' WHERE id='$datos[4]'";
			return $result = mysqli_query($conexion,$sql);
		}
		public function eliminarDatosNombre($id){
			$c = new Conectar();
			$conexion = $c->conexion();
			$sql="DELETE FROM materias WHERE id='$id'";
			return $result = mysqli_query($conexion,$sql);
		}
	}
?>