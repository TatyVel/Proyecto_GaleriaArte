<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
</head>
<body>
	<div class="container" style="max-width: 50%">
		<h1 class="display-4" style="margin:15px auto;">Agregar Nuevo Artista</h1>
		<form name="agregar" action="<?php echo base_url().'artista_controller/agregar';?>" method="POST">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" id="nombre" required class="form-control">
			</div>
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" id="apellido" required class="form-control">
			</div>
			<div class="form-group">
				<label>Nacionalidad</label>
				<input type="text" id="nacionalidad" required class="form-control">
			</div>
			<div class="form-group">
				<button type="button"  value="agregar" id="agregar" class="btn btn-success">+ Agregar</button>
			</div>
		</form>
	</div>
	<script src="<?php echo base_url().'assets/js/main.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/agregar.js';?>"></script>
</body>
</html>