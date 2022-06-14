<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container" style="max-width: 50%">
		<h1 class="display-4" style="margin:15px auto;">Agregar Nueva Exposición</h1>
		<form name="agregar" action="<?php echo base_url();?>exposicion_controller/agregar" method="POST">
			<div class="form-group">
				<label>Título</label>
				<input type="text" name="titulo" required class="form-control">
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<input type="text" name="descripcion" required class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha de inicio</label>
				<input type="date" name="fecha_inicio" required class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha de clausura</label>
				<input type="date" name="fecha_clausura" required class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" name="agregar" class="btn btn-success">+ Agregar</button>
			</div>
		</form>
	</div>
</body>
</html>