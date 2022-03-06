<?php
	require_once "./clases/Conexion.php";
	require_once "./clases/Metodos.php";
	include "./header.php";
	include "./footer.php";
?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="jumbotron border border-dark mt-4">
				<h1 class="display-4 text-center" style="color: black;">CRUD de Materias</h1>
				<hr class="my-4" style="background-color: black;">
				<br>
				<form action="procesos/insertar.php" method="POST" class="alert alert-success border border-dark" role="alert">
					<label style="color: black;">Nombre de la Materia:</label>
					<input type="text" name="nombre" class="form-control border border-dark" required placeholder="Ingresar Nombre de la Materia">
					<br>
					<label style="color: black;">Semestre:</label>
					<!--<input type="text" name="semestre" class="form-control border border-dark" required placeholder="Ingresar Semestre">-->
					<select class="form-control border border-dark" aria-label="Default select example" name="semestre" required>
						<option selected>Seleccionar Semestre...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<br>
					<label style="color: black;">Creditos:</label>
					<input type="text" name="creditos" class="form-control border border-dark" required placeholder="Ingresar Creditos Correspondientes">
					<br>
					<label style="color: black;">Carrera:</label>
					<!--<input type="text" name="carrera" class="form-control border border-dark" required placeholder="Ingresar Carrera">-->
					<br>
					<select class="form-control border border-dark" aria-label="Default select example" name="carrera" required>
						<option selected>Seleccionar Carrera...</option>
						<option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
						<option value="Ing. en Gestion Empresarial">Ing. en Gestion Empresarial</option>
						<option value="Ing. Industrial">Ing. Industrial</option>
					</select>
					<br>
					<div class="row">
						<div class="col-sm-5"></div>
						<div class="col-sm-2"><button class="btn btn-success border border-dark text-center"><i class="fas fa-plus-circle"></i>&nbsp Agregar</button></div>
						<div class="col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<table class="table table-bordered border-dark table-sm table-striped table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th>Nombre de la Materia</th>
						<th>Semestre</th>
						<th>Creditos</th>
						<th>Carrera</th>
						<th>Actualizar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<?php
					$objeto = new Metodos();
					$sql="SELECT id,nombre,semestre,creditos,carrera FROM materias";
					$datos=$objeto->mostrarDatos($sql);
					foreach ($datos as $key) {
				?>
				<tbody>
					<tr>
						<td><?php echo $key['nombre']; ?></td>
						<td><?php echo $key['semestre']; ?></td>
						<td><?php echo $key['creditos']; ?></td>
						<td><?php echo $key['carrera']; ?></td>
						<td><a href="procesos/editar.php?id=<?php echo $key['id']?>"><i class="fas fa-pencil-alt fs-4" style="color: blue;"></i></a></td>
						<td><a href="procesos/eliminar.php?id=<?php echo $key['id']?>"><i class="fas fa-trash-alt fs-4" style="color: red;"></i></a></td>
					</tr>
				</tbody>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>