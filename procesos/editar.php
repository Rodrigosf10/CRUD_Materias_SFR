<?php
//Actualizacion
	require_once "../clases/Conexion.php";

	$objeto = new Conectar();
	$conexion = $objeto->conexion();
	$id=$_GET['id'];
	$sql="SELECT nombre,semestre,creditos,carrera FROM materias WHERE id='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" href="../librerias/css/B4/bootstrap.min.css">
    <link rel="stylesheet" href="../librerias/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../librerias/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../librerias/datatables/bootstrap.css">
    <link rel="shortcut icon" href="../librerias/icon/Xanna.ico">
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="jumbotron border border-dark">
					<h1 class="display-4 text-center">Actualizar Registro</h1>
					<hr class="my-4" style="background-color: black;">
						<form action="../procesos/actualizar.php" method="POST">
							<input type="text" hidden="" value="<?php echo $id ?>" name="id">
							<label>Nombre:</label>
							<input type="text" name="nombre" value="<?php echo $ver[0] ?>" class="form-control border border-dark">
							<br>
							<label>Semestre:</label>
							<input type="text" name="semestre" value="<?php echo $ver[1] ?>" class="form-control border border-dark">
							<br>
							<label>Creditos:</label>
							<input type="text" name="creditos" value="<?php echo $ver[2] ?>" class="form-control border border-dark">
							<br>
							<label>Carrera:</label>
							<input type="text" name="carrera" value="<?php echo $ver[3] ?>" class="form-control border border-dark">
							<br>
							<div class="row text-center">
								<div class="col"><button class="btn btn-success border border-dark text-center border border-dark"><i class="fas fa-sync"></i>&nbsp Actualizar</button></div>
							</div>
						</form>
					</div>
				</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<script src="../librerias/js/jquery-3.6.0.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
    <script src="../librerias/js/popper.min.js"></script>
    <script src="../librerias/js/sweetalert.min.js"></script>
    <script src="../librerias/css/fontawesome/js/all.min.js"></script>
</body>
</html>