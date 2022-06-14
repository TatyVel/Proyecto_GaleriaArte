<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar propietario</h1>
		<form name="editar" action="<?php echo base_url();?>propietario_controller/editar" method="POST">			
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" value="<?=$propietario->nombre?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" name="apellido" value="<?=$propietario->apellido?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Teléfono</label>
				<input type="text" name="telefono" value="<?=$propietario->telefono?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Correo</label>
				<input type="email" name="correo" value="<?=$propietario->correo?>" required class="form-control">			
			</div>				
			<div class="form-group">
				<label>Dirección</label>
				<input type="text" name="direccion" value="<?=$propietario->direccion?>" required class="form-control">
			</div>				
			<div class="form-group">
				<label>Nacionalidad</label>
				<input type="text" name="nacionalidad" value="<?=$propietario->nacionalidad?>" required class="form-control">
			</div>				
			<div class="form-group">
				<label>Oferta</label>					
				<select name="id_oferta" required class="form-control">
					<?php foreach($this->propietario_model->obtenerOferta() as $ofer):?>
						<option value="<?php echo $ofer->id_oferta; ?>"<?php echo $ofer->id_oferta == $propietario->id_oferta ? 'selected':'' ?>><?php echo $ofer->monto; ?></option>
					<?php endforeach; ?>
				</select>					
			</div>
			<input type="hidden" name="id" value="<?=$propietario->id_propietario?>">
			<div clas="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>
		</form>
	</div>	
</body>
</html>