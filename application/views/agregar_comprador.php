<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container" style="max-width: 50%">
		<h1 class="display-4" style="margin:15px auto;">Agregar Comprador</h1>
		<form name="agregar" action="<?php echo base_url();?>comprador_controller/agregar" method="POST">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" required class="form-control">
			</div>
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" name="apellido" required class="form-control">
			</div>
			<div class="form-group">
				<label>Teléfono</label>
				<input type="text" name="telefono" required class="form-control">
			</div>
			<div class="form-group">
				<label>Correo</label>
				<input type="text" name="correo" required class="form-control">
			</div>
			<div class="form-group">
				<label>Dirección</label>
				<input type="text" name="direccion" required class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" name="agregar" class="btn btn-success">+ Agregar</button>
			</div>
		</form>
	</div>
</body>
</html>