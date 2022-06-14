<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar exposición</h1>
		<form name="editar" action="<?php echo base_url();?>exposicion_controller/editar" method="POST">
			<div class="form-group">
				<label>Título</label>
				<input type="text" name="titulo" value="<?=$exposicion->titulo?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<input type="text" name="descripcion" value="<?=$exposicion->descripcion?>" required class="form-control">
			</div>
			<div class="form-group">				
				<label>Fecha de inicio</label>
				<input type="date" name="fecha_inicio" value="<?=$exposicion->fecha_inicio?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha de clausura</label>
				<input type="date" name="fecha_clausura" value="<?=$exposicion->fecha_clausura?>" required class="form-control">
			</div>
			<input type="hidden" name="id" value="<?=$exposicion->id_exposicion?>">
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>			
		</form>
	</div>	
</body>
</html>