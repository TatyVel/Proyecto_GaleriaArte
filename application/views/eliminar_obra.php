<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated jello">Eliminar obra</h1>
		<form name="eliminar" action="<?php echo base_url();?>obra_controller/eliminar" method="POST" autocomplete="off">
			<div class="form-group">
				<label>Nombre de la Obra:</label>
				<input type="text" name="textNombre" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;Borrar</button>
			</div>
		</form>
	</div>
</body>
</html>