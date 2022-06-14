<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar comprador</h1>
		<form name="editar" action="<?php echo base_url();?>comprador_controller/editar" method="POST">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" value="<?=$comprador->nombre?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" name="apellido" value="<?=$comprador->apellido?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Teléfono</label>
				<input type="text" name="telefono" value="<?=$comprador->telefono?>" required class="form-control">
			</div>			
			<div class="form-group">
				<label>Correo</label>
				<input type="email" name="correo" value="<?=$comprador->correo?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Dirección</label>				
				<input type="text" name="direccion" value="<?=$comprador->direccion?>" required class="form-control">
			</div>
			<input type="hidden" name="id" value="<?=$comprador->id_comprador?>">
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>			
		</form>
	</div>	
</body>
</html>