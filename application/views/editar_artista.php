<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar artista</h1>
		<form name="editar" action="<?php echo base_url();?>artista_controller/editar" method="POST">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" value="<?=$artista->nombre?>" required class="form-control">
			</div>			
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" name="apellido" value="<?=$artista->apellido?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Nacionalidad</label>
				<input type="text" name="nacionalidad" value="<?=$artista->nacionalidad?>" required class="form-control">
			</div>
			<input type="hidden" name="id" value="<?=$artista->id_artista?>">
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>			
		</form>
	</div>	
</body>
</html>